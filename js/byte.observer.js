
    /* NAMESPACE */
    var Byte = {

        Observer: {
            Modules: {
                GUI: {
                    Buttons: {
                    },
                    Layers: {
                    },
                    Entities: {
                    },
                    Auxiliary: {
                        Search: {
                        }
                    }
                },
                Backend: {
                    Bytelight: {
                    }
                },
                Frontend: {
                }
            },
            Collections: {
            },
            Helpers: {
            },
            Models: {
                Views: {
                },
                Details: {
                }
            }
        }
    };

    /* MAIN "APP" */
    Byte.Observer.App = function() {

        this.params = {
            ui: {
                dom: {
                }
            },
            currentView: null,
            currentViewModel: null,
            events: {
                contextMenu: [{label:'Update Current View',eventName:'byte_observer_view_update'}],
                modelReady: 'byte_observer_model_view_{1}_ready'
            }
        }

        this.buildUI = function() {

            this.params.ui.dom.container = $('body');

            // ui instances
            this.params.ui.dom.viewLayer = this.params.ui.viewLayer.getLayer();
            this.params.ui.dom.viewsButton = this.params.ui.viewsButton.getButton(Byte.Observer.Collections.Views.getViews(),'byte-observer-button-views');

            // append to container
            this.params.ui.dom.container
                .append(this.params.ui.dom.viewLayer)
                .append(this.params.ui.dom.viewsButton);

            // attach details layer to body
            this.params.ui.detailsLayer.attachTo($('body'));
        }

        this.attachObservers = function() {

            $(window).bind('byte_observer_view_switch',$.proxy(this.renderViewModel,this));
            $(window).bind('byte_observer_view_update',$.proxy(this.updateViewModel,this));
            // add hashbang change event handler
            $(window).bind('hashchange',function(){Byte.Observer.Modules.Frontend.Hashbang.controller()});
        }

        this.getContextMenuOptions = function() {

            var local = this.params.events.contextMenu;
            var model = this.params.currentViewModel.getContextMenuOptions();

            return ( model && model.length ) ? local.concat(model) : local;
        }

        this.renderViewModel = function(e,view) {

            if ( view.hasOwnProperty('type') && typeof view.type === 'string' ) {

                var newViewModel = null;

                try {
                    newViewModel = new Byte.Observer.Models.Views[view.type.capitalize()]();
                }
                catch (ex) {
                    this.params.ui.viewsButton.fallbackToView(this.params.currentView);
                }

                if ( newViewModel ) {

                    this.params.currentView = view;

                    if ( this.params.currentViewModel ) {

                        this.params.currentViewModel.destroy();
                    }
                    this.observeModelReady(this.params.events.modelReady.replaceTokens(view.type),{type: view.type,id: view.id, childId: view.childId, action: view.action});
                    this.params.currentViewModel = newViewModel;
                    this.params.ui.viewsButton.fallbackToView(this.params.currentView);

                    // context menu
                    this.params.ui.viewsButton.removeContextOptions().setContextOptions(this.getContextMenuOptions());
                }
            }
        }

        this.observeModelReady = function(eventName,obj) {

            $(window).one(eventName,obj,$.proxy(this.modelReady,this));

            if ( obj ) {

                Byte.Observer.Modules.Frontend.Hashbang.setState([obj.type,obj.id,obj.childId,obj.action]);
            }
        }

        this.modelReady = function(e) {

            if ( e && e.data && e.data.hasOwnProperty('type') && this.params.currentViewModel.getViewType() === e.data.type ) {

                this.params.ui.viewLayer.clear();
                this.setViewLayerModel(this.params.currentViewModel.getModelUI());

                if ( e.data.hasOwnProperty('id') && e.data.id !== null ) {

                    $(window).trigger('byte_observer_entity_{1}_{2}'.replaceTokens(e.data.type,e.data.id),[e.data.childId,e.data.action]);
                }
            }
        }

        this.setViewLayerModel = function(dom) {

            this.params.ui.viewLayer.clear().setContent(dom);
        }

        this.updateViewModel = function() {

            if ( this.params.currentView !== null ) {

                this.observeModelReady(this.params.events.modelReady.replaceTokens(this.params.currentView.type),{type: this.params.currentView.type});
                this.params.currentViewModel.loadModelData();
            }
        }

        this.init = function() {

            // ui blocks
            this.params.ui.viewLayer = new Byte.Observer.Modules.GUI.Layers.View();
            this.params.ui.viewsButton = new Byte.Observer.Modules.GUI.Buttons.View();
            this.params.ui.detailsLayer = new Byte.Observer.Modules.GUI.Layers.Details();
            this.params.ui.bytelight = new Byte.Observer.Modules.GUI.Auxiliary.Search.Bytelight();

            // build them
            this.buildUI();

            // attach event observers
            this.attachObservers();

            // startup
            this.startup();
        }

        this.startup = function() {

            var startupPathArray = Byte.Observer.Modules.Frontend.Hashbang.parseUriHash();

            if ( startupPathArray.length ) {

                $(window).trigger('hashchange');
            }
            else {
                // select default view;
                var view = this.params.ui.viewsButton.getViewByType('rack');
                this.params.ui.viewsButton.selectView({data:view.id});
            }
        }

        this.init();

        return this;
    }

    /* ENTITIES */

    /* #1 RACK */
    Byte.Observer.Modules.GUI.Entities.Server = function(data) {

        this.params = {
            data: data,
            dom: {
            },
            details: null,
            css: 'byte-observer-entity-server',
            cssNamespace: 'byte-observer-entity-status-{1}',
            filtered: false,
        }

        this.isFiltered = function() {

            return this.params.filtered;
        }

        this.setFiltered = function(val) {

            this.params.filtered = val;
        }

        this.highlight = function(on) {

            on = ( typeof on === 'boolean' ) ? on : true;

            if ( on ) {

                this.params.dom.entityContainer.addClass('entity-highlighted');
            }
            else {
                this.params.dom.entityContainer.removeClass('entity-highlighted');
            }
        }

        this.isViewSwitchSupported = function() {

            return Byte.Observer.Collections.Views.viewExists(this.params.data.function);
        }

        this.showDetails = function(e) {

            $(window).trigger('byte-observer-module-layer-details',[this]);
        }

        this.getFullname = function() {

            return ( this.params.data ) ? this.params.data.fullname : null;
        }

        this.getParent = function() {

            return ( this.params.data ) ? this.params.data.parent : null;
        }

        this.getType = function() {

            return ( this.params.data ) ? this.params.data.function : null;
        }

        this.getId = function() {

            return ( this.params.data ) ? this.params.data.server_id : null;
        }

        this.getData = function() {

            return this.params.data;
        }

        this.attachObserver = function() {

            this.params.dom.entityContainer.bind('click',$.proxy(this.showDetails,this));
        }

        this.getDOM = function() {

            this.params.dom.entityContainer = $('<div>').addClass(this.params.css);

            if ( this.params.data ) {

                this.params.dom.entityContainer.name = $('<div>').html(this.params.data.fullname);
                this.params.dom.entityContainer.id = $('<div>').html(this.params.data.server_id);
                this.params.dom.entityContainer
                    .append(this.params.dom.entityContainer.name)
                    .append(this.params.dom.entityContainer.id);

                if ( this.isViewSwitchSupported() ) {

                    this.params.entityDetails = new Byte.Observer.Modules.GUI.Buttons.SwitchToView(this);
                    this.params.dom.entityContainer.append(this.params.entityDetails.getDOM());
                }

                this.params.dom.entityContainer.addClass(this.params.cssNamespace.replaceTokens(this.params.data.status));

                this.attachObserver();
            }

            return this.params.dom.entityContainer;
        }

        return this;
    }

    Byte.Observer.Modules.GUI.Entities.BladeServer = function(data) {

        // pass data to the base class main [constructor]
        this.constructor(data);
        // alter css styling for the entity
        this.params.css = 'byte-observer-entity-blade-server';

        this.getDOM = function() {

            this.params.dom.entityContainer = $('<div>').addClass(this.params.css);

            if ( this.params.data ) {

                this.params.dom.fullnameContainer = $('<div>');
                this.params.dom.fullname = $('<div>').html(this.params.data.fullname);
                this.params.dom.entityContainer.id = $('<div>').html(this.params.data.server_id);

                this.params.dom.fullnameContainer
                    .append(this.params.dom.fullname);

                this.params.dom.entityContainer
                    .append(this.params.dom.fullnameContainer)
                    .append(this.params.dom.entityContainer.id);

                if ( this.isViewSwitchSupported() ) {

                    this.params.entityDetails = new Byte.Observer.Modules.GUI.Buttons.SwitchToView(this);
                    this.params.dom.entityContainer.append(this.params.entityDetails.getDOM());
                }

                this.params.dom.entityContainer.addClass(this.params.cssNamespace.replaceTokens(this.params.data.status));

                this.attachObserver();
            }

            return this.params.dom.entityContainer;
        }

        return this;
    }
    Byte.Observer.Modules.GUI.Entities.BladeServer.prototype = new Byte.Observer.Modules.GUI.Entities.Server();

    Byte.Observer.Modules.GUI.Entities.Switch = function(data) {

        // pass data to the base class main [constructor]
        this.constructor(data);
        // alter css styling for the entity
        this.params.css = 'byte-observer-entity-switch';

        return this;
    }
    Byte.Observer.Modules.GUI.Entities.Switch.prototype = new Byte.Observer.Modules.GUI.Entities.Server();

    Byte.Observer.Modules.GUI.Entities.Shelf = function(data) {

        this.params = {
            data: data,
            size: parseInt(data.size),
            id: data.id,
            server: null
        }

        this.getData = function() {

            return this.params.data;
        }

        this.getEntitySize = function() {

            return this.params.size;
        }

        this.getEntity = function() {

            return this.params.entity;
        }

        this.getEntityDOM = function() {

            var entityContainer = $('<div>');
                entityContainer.eIds = $('<div>');
                entityContainer.eData = $('<div>');

                return entityContainer
                    .append(entityContainer.eIds)
                    .append(entityContainer.eData);
        }

        this.getServer = function() {

            return this.params.entity;
        }

        this.getShelfNumber = function(id) {

            return $('<div>').html(id);
        }

        this.getDOM = function() {

            var shelvesOccupied = this.getEntitySize();
            var dom = $('<tr>');
            var entityContainer = $('<td>');
            var entityContainerDiv = $('<div>');
            var entityDOM = this.getEntityDOM();

            var device = this.params.data;

            for ( var i = device.id, j = i + device.size; i < j; i++ ) {

                entityDOM.eIds.append(this.getShelfNumber(i));
            }

            this.params.entity = new Byte.Observer.Modules.GUI.Entities.Server(this.params.data.entity);

            entityDOM.eData.append(this.params.entity.getDOM());

            if ( !this.params.entity.getData() ) {
                entityDOM.eData.addClass('byte-observer-model-empty');
            }

            return dom.append(entityContainer.append(entityContainerDiv.append(entityDOM)));
        }

        return this;
    }

    Byte.Observer.Modules.GUI.Entities.VmServer = function(data) {

        this.params = {
            data: data,
            size: 1,
            id: data.id
        }

        this.getData = function() {

            return this.params.data;
        }

        this.getEntitySize = function() {

            return this.params.size;
        }

        this.getEntity = function() {

            return this.params.entity;
        }

        this.getEntityDOM = function() {

            var entityContainer = $('<div>');
                entityContainer.eIds = $('<div>');
                entityContainer.eData = $('<div>');

                return entityContainer
                    .append(entityContainer.eIds)
                    .append(entityContainer.eData);
        }

        this.getShelfNumber = function(id) {

            return $('<div>').html(id);
        }

        this.getServer = function() {

            return this.params.entity;
        }

        this.getDOM = function() {

            var shelvesOccupied = this.getEntitySize();
            var dom = $('<tr>');
            var entityContainer = $('<td>');
            var entityContainerDiv = $('<div>');
            var entityDOM = this.getEntityDOM();

            var device = this.params.data;

            entityDOM.eIds.append(this.getShelfNumber(this.params.id));

            this.params.entity = new Byte.Observer.Modules.GUI.Entities.Server(this.params.data.entity);

            entityDOM.eData.append(this.params.entity.getDOM());

            return dom.append(entityContainer.append(entityContainerDiv.append(entityDOM)));
        }

        return this;
    }

    Byte.Observer.Modules.GUI.Entities.Rack = function(data) {

        this.params = {
            data: data,
            size: parseInt(data.size),
            id: data.server_id,
            fullname: data.fullname,
            type: 'rack',
            selected: false,
            dom: {
            },
            events: {
                focus: 'byte_observer_entity_{1}_{2}',
                prefocus: 'byte-observer-module-layer-details-prefocus'
            },
            highlightedChild: null
        }

        this.getContainer = function() {

            return this.params.dom.rackContainer;
        }

        this.getId = function() {

            return this.getFullname();
        }

        this.getType = function() {

            return this.params.type;
        }

        this.getFullname = function() {

            return ( this.params.fullname ) ? this.params.fullname : 'NA';
        }

        this.getSize = function() {

            return this.params.size;
        }

        this.getData = function() {

            return this.params.data;
        }

        this.getDOM = function() {

            this.params.dom.rackContainer = $('<div class="rack">')
            this.params.dom.rackTable = $('<table celpadding=0 cellspacing=0 border=0 class="byte-observer-model byte-observer-model-rack">');
            var rackName = $('<th class="">').html(this.getFullname().toUpperCase());

            this.params.dom.rackContainer
                .append(this.params.dom.rackTable
                    .append($('<thead>')
                        .append($('<tr>').append(rackName))));

            var entities = this.params.data.entities;
            var nodesBuffer = [];

            if ( entities && entities.length ) {

                var shelfEntities = new Array();

                for ( var i = 1, len = this.params.size; i <= len; i++ ) {

                    var shelfEntityData = entities[0];

                    if ( shelfEntityData && shelfEntityData.id == i ) {

                        shelfEntityData = entities.splice(0,1)[0];
                        i += shelfEntityData.size - 1;
                        shelfEntityData.entity.parent = this;
                    }
                    else {
                        shelfEntityData = {id:i,entity:null,size:1};
                    }

                    var shelfEntity = new Byte.Observer.Modules.GUI.Entities.Shelf(shelfEntityData);
                    nodesBuffer.push(shelfEntity.getDOM()[0]);
                    shelfEntities.push(shelfEntity.getServer());
                }

                this.params.dom.rackTable.append(nodesBuffer);
                nodesBuffer = null;

                this.params.shelfEntities = shelfEntities;
                this.observeFocus();
            }

            return this.params.dom.rackContainer;
        }

        this.setDisplay = function(on) {

            on = ( typeof on === 'boolean' ) ? on : true;

            if ( on ) {
                this.params.dom.rackContainer.attr('style',null);
            }
            else {
                this.params.dom.rackContainer.attr('style','display: none !important;');
            }
        }

        this.highlightChildByName = function(name,action) {

            var children = this.getChildren();

            for ( var i = 0, len = children.length; i < len; i++ ) {

                if ( children[i].getFullname() === name ) {

                    children[i].highlight();

                    if ( action ) {

                        children[i].showDetails();
                    }

                    this.params.highlightedChild = children[i];

                    break;
                }
            }
        }

        this.deselectEntity = function(e,entity) {

            if ( entity.getId() !== this.getId() ) {

                this.highlight(false);

                if ( this.params.highlightedChild ) {

                    this.params.highlightedChild.highlight(false);
                    this.params.highlightedChild = null;
                }
            }
        }

        this.getChildren = function() {

            return ( this.params.shelfEntities ) ? this.params.shelfEntities : [];
        }

        this.highlight = function(e,childId,action) {

            var on = ( e ) ? true : false;

            if ( typeof e === 'object' ) {

                if ( childId ) {

                    this.highlightChildByName(childId,action);
                }
                else if ( action ) {

                    this.showDetails();
                }

                // ask layer to focus on us
                if ( e.preventDefault ) {

                    $(this.params.dom.rackContainer).trigger('byte_observer_layer_focus',[this]);
                    e.preventDefault();
                }

                $(window).one(this.params.events.prefocus,$.proxy(this.deselectEntity,this));
            }

            if ( on ) {
                this.params.dom.rackContainer.addClass('glowing');
            }
            else {
                this.params.dom.rackContainer.removeClass('glowing');
            }

            return false;
        }

        this.observeFocus = function() {

            $(window).unbind(this.params.events.focus.replaceTokens(this.getType(),this.getFullname()));
            $(window).bind(this.params.events.focus.replaceTokens(this.getType(),this.getFullname()),$.proxy(this.highlight,this));
        }

        return this;
    }

    Byte.Observer.Modules.GUI.Entities.Vm = function(data) {

        this.params = {
            data: data,
            size: ( data.entities ) ? data.entities.length : 0,
            id: data.server_id,
            fullname: data.fullname,
            type: 'vm',
            parent: data.parent,
            selected: false,
            dom: {
            },
            events: {
                focus: 'byte_observer_entity_{1}_{2}',
                prefocus: 'byte-observer-module-layer-details-prefocus',
                system: {
                    details: 'byte-observer-module-layer-details'
                }
            },
            vmEntities: null,
            highlightedChild: null
        }

        this.getContainer = function() {

            return this.params.dom.container;
        }

        this.getId = function() {

            return ( this.params.id ) ? this.params.id : null;
        }

        this.getFullname = function() {

            return ( this.params.fullname ) ? this.params.fullname : 'NA';
        }

        this.getType = function() {

            return this.params.type;
        }

        this.getSize = function() {

            return this.params.size;
        }

        this.showDetails = function() {
            $(window).trigger(this.params.events.system.details,[this]);
        }

        this.getData = function() {

            return this.params.data;
        }

        this.getDOM = function() {

            this.params.dom.container = $('<div class="rack">')
            this.params.dom.table = $('<table celpadding=0 cellspacing=0 border=0 class="byte-observer-model byte-observer-model-vm">');
            var heading = $('<th class="">');
            var headingName = $('<div>').html(this.getFullname().toUpperCase());

            try {
                var parentView = new Byte.Observer.Modules.GUI.Buttons.ParentEntity({type: this.params.parent.type,id:this.params.parent.fullname});
            }
            catch (e) {
            }

            heading
                .append(headingName)
                .bind('click',$.proxy(this.showDetails,this));

            if ( parentView ) {

                heading.append(parentView.getDOM());
            }

            this.params.dom.container
                .append(this.params.dom.table
                    .append($('<thead>')
                        .append($('<tr>').append(heading))));

            var entities = this.params.data.entities;
            var nodesBuffer = [];

            if ( entities && entities.length ) {

                var vmEntities = new Array();

                for ( var i = 1, len = this.params.size; i <= len; i++ ) {

                    var vmEntityData = entities[i-1];
                        vmEntityData.id = i;
                        vmEntityData.entity.parent = this;
                    var vmEntity = new Byte.Observer.Modules.GUI.Entities.VmServer(vmEntityData);

                    nodesBuffer.push(vmEntity.getDOM()[0]);
                    vmEntities.push(vmEntity.getServer());
                }

                this.params.dom.table.append(nodesBuffer);
                nodesBuffer = null;

                this.params.vmEntities = vmEntities;

                this.observeFocus();
            }

            return this.params.dom.container;
        }

        this.setDisplay = function(on) {

            on = ( typeof on === 'boolean' ) ? on : true;

            if ( on ) {
                this.params.dom.container.attr('style',null);
            }
            else {
                this.params.dom.container.attr('style','display: none !important;');
            }
        }

        this.getChildren = function() {

            return ( this.params.vmEntities ) ? this.params.vmEntities : [];
        }

        this.highlightChildByName = function(name,action) {

            var children = this.getChildren();

            for ( var i = 0, len = children.length; i < len; i++ ) {

                if ( children[i].getFullname() === name ) {

                    children[i].highlight();

                    if ( action ) {

                        children[i].showDetails();
                    }

                    this.params.highlightedChild = children[i];

                    break;
                }
            }
        }

        this.deselectEntity = function(e,entity) {

            if ( entity.getId() !== this.getId() ) {

                this.highlight(false);

                if ( this.params.highlightedChild ) {

                    this.params.highlightedChild.highlight(false);
                    this.params.highlightedChild = null;
                }
            }
        }

        this.highlight = function(e,childId,action) {

            var on = ( e ) ? true : false;

            if ( typeof e === 'object' ) {

                if ( childId ) {

                    this.highlightChildByName(childId,action);
                }
                else if ( action ) {

                    this.showDetails();
                }

                // ask layer to focus on us
                if ( e.preventDefault ) {

                    $(this.params.dom.container).trigger('byte_observer_layer_focus',[this]);
                    e.preventDefault();
                }

                $(window).one(this.params.events.prefocus,$.proxy(this.deselectEntity,this));
            }

            if ( on ) {
                this.params.dom.container.addClass('glowing');
            }
            else {
                this.params.dom.container.removeClass('glowing');
            }

            return false;
        }

        this.observeFocus = function() {

            $(window).unbind(this.params.events.focus.replaceTokens(this.getType(),this.getFullname()));
            $(window).bind(this.params.events.focus.replaceTokens(this.getType(),this.getFullname()),$.proxy(this.highlight,this));
        }

        return this;
    }

    /* #2 CMM */
    Byte.Observer.Modules.GUI.Entities.Blade = function(data) {

        this.params = {
            data: data,
            servers: data.servers,
            id: data.id
        }

        this.getData = function() {

            return this.params.data;
        }

        this.getServers = function() {

            return this.params.servers;
        }

        this.getBladeServerNumber = function(id) {

            return $('<div>').html(id)[0];
        }

        this.getDOM = function() {

            var dom = $('<div>');

            var devices = this.params.servers;
            var nodesBuffer = [];

            // kick in the blade servers
            for ( i = 0; i < 2; i++ ) {

                nodesBuffer.push(this.getBladeServerNumber(devices[i].id));
                var bladeServer = new Byte.Observer.Modules.GUI.Entities.BladeServer(devices[i].entity);
                devices[i] = bladeServer;

                if ( !bladeServer.getData() ) {
                    nodesBuffer.push(bladeServer.getDOM().addClass('byte-observer-model-empty')[0]);
                }
                else {
                    nodesBuffer.push(bladeServer.getDOM()[0]);
                }
            }
            // append via document fragment
            dom.append(nodesBuffer);
            nodesBuffer = null;

            return dom;
        }

        return this;
    }

    Byte.Observer.Modules.GUI.Entities.CMM = function(data) {

        this.params = {
            data: data,
            size: parseInt(data.size),
            id: data.server_id,
            fullname: data.fullname,
            type: 'cmm',
            bladesNumber: 0,
            parent: data.parent,
            events: {
                focus: 'byte_observer_entity_{1}_{2}',
                prefocus: 'byte-observer-module-layer-details-prefocus'
            },
            highlightedChild: null
        }

        this.getId = function() {

            return ( this.params.id ) ? this.params.id : null;
        }

        this.getFullname = function() {

            return ( this.params.fullname ) ? this.params.fullname : 'NA';
        }

        this.getType = function() {

            return this.params.type;
        }

        this.getSize = function() {

            return this.getBladesNumber();
        }

        this.setBladesNumber = function(qty) {

            this.params.bladesNumber = parseInt(qty);
        }

        this.highlight = function(e,childId,action) {

            var on = ( e ) ? true : false;

            if ( typeof e === 'object' ) {

                if ( childId ) {

                    this.highlightChildByName(childId,action);
                }
                else if ( action ) {

                    this.showDetails();
                }

                // ask layer to focus on us
                if ( e.preventDefault ) {

                    $(this.params.cmmContainer).trigger('byte_observer_layer_focus',[this]);
                    e.preventDefault();
                }

                $(window).one(this.params.events.prefocus,$.proxy(this.deselectEntity,this));
            }

            if ( on ) {

                this.params.cmmContainer.addClass('glowing');
            }
            else {
                this.params.cmmContainer.removeClass('glowing');
            }

            return false;
        }

        this.getBladesNumber = function() {

            return this.params.bladesNumber;
        }

        this.setDisplay = function(on) {

            on = ( typeof on === 'boolean' ) ? on : true;

            if ( on ) {
                this.params.cmmContainer.attr('style',null);
            }
            else {
                this.params.cmmContainer.attr('style','display: none !important;');
            }
        }

        this.getData = function() {

            return this.params.data;
        }

        this.getBladeEntities = function() {

            return this.params.data.bladeEntities;
        }

        this.highlightChildByName = function(name,action) {

            var children = this.getChildren();

            for ( var i = 0, len = children.length; i < len; i++ ) {

                if ( children[i].getFullname() === name ) {

                    children[i].highlight();

                    if ( action ) {

                        children[i].showDetails();
                    }

                    this.params.highlightedChild = children[i];

                    break;
                }
            }
        }

        this.getBladeServerObject = function(entities,bid) {

            for ( var i = 0, len = entities.length; i < len; i++ ) {

                if ( entities[i].id === bid ) {

                    var data = entities.splice(i,1)[0];
                    data.entity.parent = this;

                    return data;
                }
            }

            return {id: bid};
        }

        this.deselectEntity = function(e,entity) {

            if ( entity.getId() !== this.getId() ) {

                this.highlight(false);

                if ( this.params.highlightedChild ) {

                    this.params.highlightedChild.highlight(false);
                    this.params.highlightedChild = null;
                }
            }
        }

        this.observeFocus = function() {

            $(window).unbind(this.params.events.focus.replaceTokens(this.getType(),this.getFullname()));
            $(window).bind(this.params.events.focus.replaceTokens(this.getType(),this.getFullname()),$.proxy(this.highlight,this));
        }

        this.getBladeObject = function(entities,bladeOffset,id) {

            var bladeServer1Id = id;
            var bladeServer2Id = id + bladeOffset;

            var bladeObject = {
                id: id,
                servers: [this.getBladeServerObject(entities,bladeServer1Id),this.getBladeServerObject(entities,bladeServer2Id)]
            };

            return bladeObject;
        }

        this.getChildren = function() {

            return this.params.bladeEntities.concat(this.params.switchEntities);
        }

        this.showDetails = function() {

            $(window).trigger('byte-observer-module-layer-details',[this]);
        }

        this.getDOM = function() {

            this.params.cmmContainer = $('<div class="cmm">')
            var cmmTable = $('<table celpadding=0 cellspacing=0 border=0 class="byte-observer-model byte-observer-model-cmm">');
            var cmmHeading = $('<th class="">');
            var headingName = $('<div>').html(this.getFullname().toUpperCase());
            try {
                var cmmParentView = new Byte.Observer.Modules.GUI.Buttons.ParentEntity({type: this.params.parent.type,id: this.params.parent.fullname});
            }
            catch (e) {
            }
            var cmmBlades = $('<td>');
            var cmmSwitches = $('<td>').addClass('byte-observer-model-cmm-switches');

            cmmHeading
                .append(headingName);

            cmmHeading.bind('click',$.proxy(this.showDetails,this));

            if ( cmmParentView )
                cmmHeading.append(cmmParentView.getDOM());

            this.params.cmmContainer
                .append(cmmTable
                    .append($('<thead>')
                        .append($('<tr>').append(cmmHeading)))
                        .append($('<tr>').append(cmmBlades))
                        .append($('<tr>').append(cmmSwitches)));

            var entities = this.params.data.entities;
            var switches = this.params.data.switches;
            var nodesBuffer = [];
            var bladesNumber = this.params.size/2;
            // remember it
            this.setBladesNumber(bladesNumber);

            // blades
            if ( entities && entities.length ) {

                var bladeEntities = new Array();

                for ( var i = 1; i <= bladesNumber; i++ ) {

                    var bladeEntityData = this.getBladeObject(entities,bladesNumber,i);
                    var bladeEntity = new Byte.Observer.Modules.GUI.Entities.Blade(bladeEntityData);
                    nodesBuffer.push(bladeEntity.getDOM()[0]);
                    bladeEntities.push.apply(bladeEntities,bladeEntity.getServers());
                }

                cmmBlades.append(nodesBuffer);
                nodesBuffer.length = 0;

                this.observeFocus();

                this.params.bladeEntities = bladeEntities;
            }

            // switches
            if ( switches && switches.length ) {

                var switchEntities = new Array();

                for ( var i = 0, len = switches.length; i < len; i++ ) {

                    switches[i].entity.parent = this;
                    var switchEntity = new Byte.Observer.Modules.GUI.Entities.Switch(switches[i].entity);
                    nodesBuffer.push(switchEntity.getDOM()[0]);
                    switchEntities.push(switchEntity);
                }

                cmmSwitches.append(nodesBuffer);
                nodesBuffer = null;

                this.params.switchEntities = switchEntities;
            }

            this.params.cmmTable = cmmTable;

            return this.params.cmmContainer;
        }

        return this;
    }

    /* HELPERS */
    Byte.Observer.Helpers.DetailsModel = {

        getModel: function(entityType,entity) {

            var model = null;

            try {
                model = new Byte.Observer.Models.Details[entityType.capitalize()]();
                model.setEntity(entity);
            }
            catch (ex) {
            }

            return model;
        }
    }

    Byte.Observer.Helpers.KeyboardOwner = {

        owner: null,

        getOwner: function() {

            return this.owner;
        },

        setOwner: function(object) {

            this.owner = object;
        }
    }

    // transport class with static methods
    Byte.Observer.Modules.Transport = {

        request: function(obj) {

            var self = this;

            var xhrErrorHandler = function() {

                //alert('boom!');
            }

            $.ajaxSetup({
                'async': ( obj.hasOwnProperty('ajax') && typeof obj.ajax === 'boolean' ) ? obj.ajax : true,
                'error': xhrErrorHandler
            });

            if ( obj.hasOwnProperty('callback') && !obj.callback.hasOwnProperty('args') ) {

                obj.callback.args = [];
            }

            try {

                return $.post(obj.uri, obj.data, function(json){

                    if ( json && json.hasOwnProperty('status') && parseInt(json.status) === 100 ) {

                        if ( json.data ) {
                            obj.callback.args.push(json.data);
                        }

                        obj.callback.method.apply(obj.callback.object,obj.callback.args);

                    }
                    else {
                        xhrErrorHandler();
                    }
                },"json");
            }
            catch (ex) {
            }
        }
    }

    /* VIEWS */
    Byte.Observer.Models.Views.Base = function() {

        this.params = {

            uri: {
                api: 'backend/api.php'
            },
            data: null,
            dom: $('<div>'),
            events: {
                modelReady: 'byte_observer_model_view_{1}_ready',
                viewUpdateBefore: 'byte_observer_view_update_before',
                viewUpdateAfter: 'byte_observer_view_update_after'
            },
            timeoutMs: 10,
            timeout: null,
            children: [],
            nodesBuffer: [],
            searchView: null
        }

        this.destroy = function() {

            if ( this.params.searchView ) {

                this.params.searchView.removeDOM();
                this.params.searchView.detachMainObserver();
                this.params.searchView = null;
            }
        }

        this.filter = function(criteria) {

            var children = this.params.children;
            var wildcarded = criteria.replace(/\./g,'\\.').replace(/\*/g,'.*');
            var regex = new RegExp('^' + RegExp.quote(wildcarded));

            for ( var i = 0, len = children.length; i < len; i++ ) {

                var embedded = children[i].getChildren();
                var match = false;

                if ( !criteria.length ) {

                    match = true;
                }

                for ( var j = 0, l = embedded.length; j < l; j++ ) {

                    if ( !criteria.length ) {

                        embedded[j].highlight(false);
                        embedded[j].setFiltered(false);
                        continue;
                    }

                    if ( embedded[j] && embedded[j].getFullname ) {

                        var fullname = embedded[j].getFullname();

                        if ( fullname && regex.test(fullname) ) {

                            match = true;
                            embedded[j].highlight();
                            embedded[j].setFiltered(true);
                        }
                        else {
                            embedded[j].highlight(false);
                            embedded[j].setFiltered(false);
                        }
                    }
                }

               children[i].setDisplay(match);
            }
        }

        this.clearContents = function() {

            this.params.dom.children().remove();
            //TODO
            return this;
        }

        this.getContextMenuOptions = function() {

            return this.contextMenuOptions;
        }

        this.getModelUI = function() {

            return this.params.dom;
        }

        this.notifyModelReady = function() {

            // loading finished
            $(window).trigger(this.params.events.viewUpdateAfter);
            // specific model is ready
            $(window).trigger(this.params.events.modelReady.replaceTokens(this.params.viewType));
            // add view instant search functionality
            if ( !this.params.searchView ) {

                this.params.searchView = new Byte.Observer.Modules.GUI.Auxiliary.Search.View(this);
            }

            return this;
        }

        this.loadModelData = function() {

            this.params.children = [];
            this.clearContents();

            if ( this.params.searchView ) {

                this.params.searchView.removeDOM();
            }

            // notify we're loading it
            $(window).trigger(this.params.events.viewUpdateBefore);

            Byte.Observer.Modules.Transport.request({

                uri: this.params.uri.api,
                data: {view: this.params.viewType},
                callback: {
                    method: this.processModelData,
                    object: this,
                }
            });
        }

        this.appendModelDOM = function() {

            this.params.dom.append(this.params.nodesBuffer);
            this.params.nodesBuffer = [];

            return this;
        }

        this.getViewType = function() {

            return this.params.viewType;
        }

        this.processChunk = function() {

            this.buildModelUI();

            var self = this;

            if ( !this.params.data.length ) {

                this.params.timeout = null;
                this.appendModelDOM().notifyModelReady();
            }
            else {
                this.params.timeout = setTimeout(function(){self.processChunk()},this.params.timeoutMs);
            }
        }

        this.getTimeout = function() {

            return this.params.timeout;
        }

        this.cancelTimeout = function() {

            clearTimeout(this.params.timeout)
            this.params.timeout = null;

            return this;
        }

        this.processModelData = function(data) {

            this.params.dom = $('<div>');
            this.params.data = data;

            var self = this;

            if ( this.params.data.length ) {

                this.params.timeout = setTimeout(function(){self.processChunk()},this.params.timeoutMs);
            }

            return this;
        }

        return this;
    }

    Byte.Observer.Models.Views.Rack = function() {

        //this.contextMenuOptions = [{label:'Foo',eventName:'byte_observer_models_views_rack'}];
        this.contextMenuOptions = [];
        this.params.viewType = 'rack';

        this.buildModelUI = function() {

            var data = this.params.data;

            if ( data && data.length ) {

                var rack = data.splice(0,1)[0];

                if ( rack ) {

                    var rackObject = new Byte.Observer.Modules.GUI.Entities.Rack(rack);
                    this.params.children.push(rackObject);
                    this.params.nodesBuffer.push(rackObject.getDOM()[0]);
                }
            }
        }

        // all we need is data
        this.loadModelData();

        return this;
    }
    Byte.Observer.Models.Views.Rack.prototype = new Byte.Observer.Models.Views.Base();

    Byte.Observer.Models.Views.Cmm = function() {

        //this.contextMenuOptions = [{label:'MegaFoo',eventName:'byte_observer_models_views_cmm'}];
        //this.contextMenuOptions = [];
        this.params.viewType = 'cmm';

        this.buildModelUI = function() {

            var data = this.params.data;

            if ( data && data.length ) {

                var cmm = data.splice(0,1)[0];

                if ( cmm ) {

                    var cmmObject = new Byte.Observer.Modules.GUI.Entities.CMM(cmm);
                    this.params.children.push(cmmObject);
                    this.params.nodesBuffer.push(cmmObject.getDOM()[0]);
                }
            }
        }

        // all we need is data
        this.loadModelData();

        return this;
    }
    Byte.Observer.Models.Views.Cmm.prototype = new Byte.Observer.Models.Views.Base();

    Byte.Observer.Models.Views.Vm = function() {

        this.contextMenuOptions = [];
        this.params.viewType = 'vm';

        this.buildModelUI = function() {

            var data = this.params.data;

            if ( data && data.length ) {

                var vm = data.splice(0,1)[0];

                if ( vm ) {

                    var vmObject = new Byte.Observer.Modules.GUI.Entities.Vm(vm);
                    this.params.children.push(vmObject);
                    this.params.nodesBuffer.push(vmObject.getDOM()[0]);
                }
            }
        }

        this.getChildren = function() {

            return new Array();
        }

        // all we need is data
        this.loadModelData();

        return this;
    }
    Byte.Observer.Models.Views.Vm.prototype = new Byte.Observer.Models.Views.Base();

    Byte.Observer.Collections.Views = {

        viewsOptions: [
            {label: 'Rack', type: 'rack'},
            {label: 'CMM', type: 'cmm'},
            {label: 'VM', type: 'vm'},
        ],

        viewExists: function(view) {

            for ( var i = 0, len = this.viewsOptions.length; i < len; i++ ) {

                if ( this.viewsOptions[i].type === view ) {

                    return true;
                }
            }

            return false;
        },

        getViews: function() {

            return this.viewsOptions;
        }
    }

    Byte.Observer.Modules.Frontend.Hashbang = {

        params: {

            coreArgs: ['view'],
            lastSetUriHashValue: '',
            events: {
                system: {
                    viewSwitch: 'byte_observer_view_switch',
                    viewSwitchBefore: 'byte_observer_view_switch_before'
                }
            }
        },

        controller: function() {

            if ( !this.isSetViaObject() ) {

                var hashbang = this.getUriHashObject();

                // notify subscribers
                $(window).trigger(this.params.events.system.viewSwitchBefore);

                if ( hashbang && Byte.Observer.Collections.Views.viewExists(hashbang.view) ) {

                    var params = this.parseUriHash();

                    obj = {
                        type: hashbang.view,
                        id: params[1]
                    }

                    if ( params[2] && params[2] !== 'details' ) {

                        obj.childId = params[2];
                    }

                    if ( params[params.length-1] === 'details' ) {
                        obj.action = 'details';
                    }

                    this.params.lastSetUriHashValue = window.location.hash.substring(2);

                    $(window).trigger(this.params.events.system.viewSwitch,[obj]);
                }
                else {

                    $(window).trigger(this.params.events.system.viewSwitch,{type:'rack'});
                }
            }
        },

        isSetViaObject: function() {

            return this.params.lastSetUriHashValue === window.location.hash.substring(2);
        },

        setViewState: function() {

            var state = Array.prototype.slice.call(arguments);
            state.splice(0,0,this.getUriHashObject().view)
            this.setState(state);
        },

        filterEmptyNodes: function(state) {

            for ( var i = 0; i < state.length; i++ ) {

                if ( state[i] === null || state[i] === undefined ) {

                    state.splice(i,1);
                    i--;
                }
            }

            return state;
        },

        setState: function(state) {

            if ( state.length ) {

                this.params.lastSetUriHashValue = this.filterEmptyNodes(state).join('/');

                if ( !this.isSetViaObject() ) {
                    // update hashbang, trigges controller
                    window.location.hash = '!' + this.params.lastSetUriHashValue;
                }
            }
        },

        parseUriHash: function() {

            return ( window.location.hash && window.location.hash.length > 1 )
                ? window.location.hash.substring(2).split('/')
                : [];
        },

        getUriHashObject: function() {

            var hashList = this.parseUriHash();

            if ( hashList.length ) {

                var hashObject = {};
                var combinedArgs = [].concat(this.params.coreArgs);

                for ( i = 0; i < combinedArgs.length; i++ ) {

                    hashObject[combinedArgs[i]] = ( hashList[i] ) ? hashList[i] : null;
                }
            }

            return ( hashObject ) ? hashObject : null;
        }
    }

    /* LAYERS */
    Byte.Observer.Modules.GUI.Layers.View = function() {

        this.params = {
            domElements: {},
            css: {
                loading: 'byte-observer-model-view-loading'
            },
            events: {
                viewUpdateBefore: 'byte_observer_view_update_before',
                viewUpdateAfter: 'byte_observer_view_update_after',
                focus: 'byte_observer_layer_focus'
            },
            offset: 0
        }

        this.clear = function() {

            this.params.domElements.layer.html('');

            return this;
        }

        this.setContent = function(content) {

            this.params.domElements.layer.scrollLeft(0);
            this.params.domElements.layer.append(content);
            this.params.offset = this.params.domElements.layer.width()/2;

            return this;
        }

        this.switchLoadingIndication = function(on) {

            on = ( typeof on === 'boolean' ) ? on : true;

            if ( on ) {
                this.params.domElements.layer.addClass(this.params.css.loading);
            }
            else {
                this.params.domElements.layer.removeClass(this.params.css.loading);
            }

            return this;
        }

        this.focusContents = function(e,object) {

            if ( object && object.getContainer ) {

                var entityContainer = object.getContainer();
                var entityOffset = entityContainer.width()/2;
                this.params.domElements.layer.scrollTo(entityContainer,{axis:'xy',offset:{left: -10}});
            }
        }

        this.observerViewChanges = function() {

            $(window).bind(this.params.events.viewUpdateBefore,$.proxy(this.switchLoadingIndication,this,true));
            $(window).bind(this.params.events.viewUpdateAfter,$.proxy(this.switchLoadingIndication,this,false));
            $(this.params.domElements.layer).bind(this.params.events.focus,$.proxy(this.focusContents,this));
        }

        this.buildUI = function() {

            this.params.domElements.container = $('<div>').addClass('container-fluid paddless');
            this.params.domElements.layer = $('<div>').attr('id','byte-observer-view-layer');

            this.params.domElements.container.append(this.params.domElements.layer);

            this.observerViewChanges();
        }

        this.getLayer = function() {

            return this.params.domElements.container;
        }

        this.buildUI();

        return this;
    }

    Byte.Observer.Modules.GUI.Layers.Details = function() {

        this.params = {
            dom: {
            },
            attachedTo: null,
            events: {
                call: 'byte-observer-module-layer-details',
                prefocus: 'byte-observer-module-layer-details-prefocus',
                modal: {
                    keyboard: 'keydown.byte-observer-module-layer-details',
                    background: 'click.byte-observer-module-layer-details'
                },
                modelReady: 'byte_observer_model_details_{1}_{2}_ready',
                system: {
                    viewSwitch: 'byte_observer_view_switch',
                    viewSwitchBefore: 'byte_observer_view_switch_before'
                }

            },
            entity: null,
            labels: {
                default: 'Loading Entity Details..',
                loaded: 'Entity Details: {1} <sub>{2}</sub>'
            },
            genericEntityModel: 'generic',
            originalKeyboardOwner: null
        }

        this.overrideKeyboardOwnership = function() {

            // remember currently set (this or last claimed obj reference)
            this.params.originalKeyboardOwner = Byte.Observer.Helpers.KeyboardOwner.getOwner();
            // set us
            Byte.Observer.Helpers.KeyboardOwner.setOwner(this);

            return this;
        }

        this.releaseKeyboardOwnership = function() {

            Byte.Observer.Helpers.KeyboardOwner.setOwner(this.params.originalKeyboardOwner);

            if ( this.params.originalKeyboardOwner && this.params.originalKeyboardOwner.restoreFocus ) {

                setTimeout(function(){Byte.Observer.Helpers.KeyboardOwner.getOwner().restoreFocus();},100);
            }

            this.params.originalKeyboardOwner = null;
        }

        this.setOpened = function(value) {

            this.params.opened = ( value === true ) ? true : false;
        }

        this.isOpened = function() {

            return this.params.opened;
        }

        this.processCall = function(e,entity) {

            // tell view layer to remove highlighting if any
            $(window).trigger(this.params.events.prefocus,[entity]);
            // get keyboard
            this.overrideKeyboardOwnership();
            // highlight entity
            entity.highlight(true);

            if ( entity.getParent ) {

                entity.getParent().highlight(true);
            }

            this.params.entity = entity;
            this.setTitle(this.params.labels.default);
            this.show();
            this.getEntityModel();
        }

        this.getEntityModel = function() {

            var entityType = this.params.entity.getType();
            var entityId = this.params.entity.getId();
            var entityModel = Byte.Observer.Helpers.DetailsModel.getModel(entityType);

            if ( !entityModel ) {

                entityModel = Byte.Observer.Helpers.DetailsModel.getModel(this.params.genericEntityModel);
            }

            this.observeModelReady(this.params.events.modelReady.replaceTokens(entityType,entityId));
            this.params.entity.model = entityModel;
            entityModel.setEntity(this.params.entity).loadModelData();
        }

        this.updateHashbang = function() {

            var parentName = ( this.params.entity.getParent ) ? this.params.entity.getParent().getFullname() : null;
            var childName = this.params.entity.getFullname();

            Byte.Observer.Modules.Frontend.Hashbang.setViewState(parentName,childName,'details');
        }

        this.observeModelReady = function(eventName) {

            this.updateHashbang();
            $(window).one(eventName,$.proxy(this.modelReady,this));
        }

        this.modelReady = function() {

            this.setTitle(this.params.labels.loaded.replaceTokens(this.params.entity.getFullname(),this.params.entity.getId()));
            this.params.dom.body.html('').append(this.params.entity.model.getModelUI());
        }

        this.show = function(on,hashbang) {

            on = ( typeof on === 'boolean' ) ? on : true;

            if ( on ) {

                this.params.dom.container.removeClass('hide');
                // start
                this.attachModalObservers();
                this.setOpened(true);
            }
            else {
                this.params.dom.container.addClass('hide');
                // clear
                this.detachModalObservers();
                this.setOpened(false);
                this.params.entity = null;
                this.params.dom.body.html('');
                this.releaseKeyboardOwnership();

                if ( hashbang ) {
                    Byte.Observer.Modules.Frontend.Hashbang.setViewState();
                }
            }
        }

        this.setTitle = function(str) {

            this.params.dom.title.html(str);
        }

        this.modalObserver = function(e) {

            if ( e ) {

                var originalElement = e.target || e.srcElement || e.originalTarget;

                if ( (e.type === 'click' && originalElement === this.params.dom.wrapper[0] ) || e.keyCode === 27 ) {

                    this.closeView(true,null);
                }
            }
        }

        this.closeView = function(hashbang,e) {

            if ( this.params.entity && ( !this.params.entity.isFiltered || !this.params.entity.isFiltered() ) ) {

                this.params.entity.highlight(false);

                if ( this.params.entity.getParent ) {

                    this.params.entity.getParent().highlight(false);
                }
            }

            this.params.entity = null;
            this.show(false,hashbang);
        }

        this.detachModalObservers = function() {

            $(window).unbind(this.params.events.modal.keyboard);
            $(this.params.dom.container).unbind(this.params.events.modal.background);
        }

        this.attachModalObservers = function() {

            $(window).one(this.params.events.modal.keyboard,$.proxy(this.modalObserver,this));
            $(this.params.dom.container).bind(this.params.events.modal.background,$.proxy(this.modalObserver,this));
            $(window).one(this.params.events.system.viewSwitchBefore,$.proxy(this.closeView,this,false));
            this.params.dom.header.find('a').first().one('click',$.proxy(this.closeView,this,true));
        }

        this.attachObservers = function() {

            $(window).bind(this.params.events.call,$.proxy(this.processCall,this));
        }

        this.attachTo = function(domElement) {

            if ( !this.params.attachedTo ) {

                this.params.attachedTo = domElement;
                this.params.dom.container = $('<div>').attr('id','byte-observer-model-gui-layer-details').addClass('hide');
                this.params.dom.wrapper = $('<div>');
                this.params.dom.box = $('<div>').attr('type','box').addClass('modal');
                this.params.dom.header = $('<div>').addClass('modal-header').html('<a class="close" data-dismiss="modal">×</a>');
                this.params.dom.title = $('<h3>').html('Entity Details');
                this.params.dom.body = $('<div>').attr('type','body');

                this.params.dom.header
                    .append(this.params.dom.title);

                this.params.attachedTo
                    .append(this.params.dom.container
                        .append(this.params.dom.wrapper
                            .append(this.params.dom.box
                                .append(this.params.dom.header)
                                .append(this.params.dom.body)
                             )));
                this.attachObservers();
            }
        }

        return this;
    }


    /* BUTTONS AND SMALL TIME ELEMENTS */
    Byte.Observer.Modules.GUI.Buttons.View = function() {

        this.customEventName = 'byte_observer_view_switch';
        this.button = null;
        this.views = null;
        this.caret = null;
        this.defaultViewId = null;
        this.currentViewId = null;
        this.defaultLabel = 'Select view';

        this.setView = function(id,load){

            if ( id >= 0 && id <= this.views.length ) {

                load = ( load ) ? load : [];

                this.selectView({data:id,params:load});
            }
        }

        this.getView = function(id) {

            return ( id >= 0 && id <= this.views.length ) ? this.views[id] : null;
        }

        this.getViewByType = function(type) {

            for ( var i = 0, len = this.views.length; i < len; i++ ) {

                if ( this.views[i].type === type ) {

                    return this.views[i];
                }
            }

            return null;
        }

        this.getCurrentView = function() {

            return ( this.currentViewId !== null ) ? this.views[this.currentViewId] : null;
        }

        this.setCurrentView = function(id) {

            this.currentViewId = id;
        }

        this.setVisibility = function(on) {

            on = ( typeof on === 'boolean' ) ? on : false;

            this.container.css({'display': ( on ) ? 'block' : 'none'});
        }

        this.updateSelectedViewLabel = function(label){

            this.button.html(label + '  ');
            this.button.append(this.caret);
        }

        this.fallbackToView = function(view) {

            view = this.getViewByType(view.type);
            this.updateSelectedViewLabel(( view && typeof view.label === 'string' ) ? view.label : this.defaultLabel);
            this.setCurrentView( (view && typeof view.id === 'number' ) ? view.id : null );
        }

        this.selectView = function(e) {

            if ( e && e.data >= 0 ) {

                var currentView = this.getCurrentView();

                if ( !currentView || currentView.id !== e.data ) {

                    newView = this.getView(e.data);

                    var load = ( e.params ) ? e.params : null;

                    if ( newView.type !== null ) {

                        this.updateSelectedViewLabel(newView.label);
                    }

                    if ( newView.hasOwnProperty('type') && newView.type !== null ) {

                        this.setCurrentView(newView.id);
                    }
                    // trigger event
                    $(window).trigger(this.customEventName,[{type:newView.type,id:null}]);
                }
            }

            if ( e.preventDefault ) e.preventDefault();
        }

        this.removeContextOptions = function() {

            this.contextMenuHeader.nextAll().remove();
            this.contextMenuHeader.addClass('hide');

            return this;
        }

        this.setContextOptions = function(contextOptions) {

            if ( contextOptions && contextOptions.length ) {

                this.contextMenuHeader.removeClass('hide');

                for ( var i = 0, len = contextOptions.length; i < len; i++ ) {

                    if ( contextOptions[i].hasOwnProperty('label') ) {

                        var option = $('<li>');
                        var link = $('<a>').attr('href','#').html(contextOptions[i].label);
                        option.append(link);

                        if ( contextOptions[i].hasOwnProperty('eventName') ) {

                            option.bind('click',{eventName: contextOptions[i].eventName},$.proxy(this.triggerContextOptionEvent,this));
                        }

                        this.options.append(option);
                    }
                }
            }
        }

        this.triggerContextOptionEvent = function(e) {

            if ( e && e.data && typeof e.data === 'object' && e.data.hasOwnProperty('eventName') ) {

                $(window).trigger(e.data.eventName);

                if ( e.preventDefault ) e.preventDefault();
            }
        }

        this.getButton = function(views,cssClass) {

            this.views = views;

            this.container = $('<div>').addClass(['btn-group',cssClass].join(' ').trim());
            this.button = $('<button>').addClass('btn btn-primary dropdown-toggle').attr('data-toggle','dropdown').attr('tabIndex',-1);
            this.caret = $('<span>').addClass('caret');
            this.options = $('<ul>').addClass('dropdown-menu');

            for ( var i = 0, len = views.length; i < len; i++ ) {

                var option = $('<li>');
                var view = views[i];

                if ( view.hasOwnProperty('label') ) {

                    var link = $('<a>').attr('href','#').html(view.label);
                    option.append(link);
                    view.id = parseInt(i);
                    option.bind('click',view.id,$.proxy(this.selectView,this));
                }

                this.options.append(option);
            }

            // append divider
            this.contextMenuHeader = $('<li>').addClass('divider hide');

            // store for access
            this.container.append(this.button.append(this.caret));
            this.container.append(this.options.append(this.contextMenuHeader));

            // set default label
            this.updateSelectedViewLabel(this.defaultLabel);

            return this.container;
        }

        return this;
    }

    Byte.Observer.Modules.GUI.Auxiliary.Search.ViewBase = function(view) {

        this.params = {
            view: view,
            events: {
                keyboard: {
                    keypress: 'keypress.byte_observer_auxiliary_search_base',
                    keyup: 'keyup.byte_observer_auxiliary_search_base',
                    keypressInit: 'keydown.byte_observer_auxiliary_search_base_init'
                },
                notify: {
                    keyboardOwnership: 'byte_observer_keyboard_ownership'
                }
            },
            dom: null,
            criteria: '',
            css: {
                container: 'byte-observer-auxiliary-instant-view-search',
                criteria: 'byte-observer-auxiliary-instant-view-search-criteria',
                cancel: 'byte-observer-auxiliary-instant-view-search-cancel icon-white icon-remove',
                input: 'byte-observer-auxiliary-instant-view-search-input',
                measure: 'byte-observer-auxiliary-instant-view-search-measure'
             }
        }

        this.getKeyboardOwnership = function() {

            var currentOwner = Byte.Observer.Helpers.KeyboardOwner.getOwner();

            if ( currentOwner === null ) {

                currentOwner = this;
                Byte.Observer.Helpers.KeyboardOwner.setOwner(currentOwner);
            }

            return currentOwner === this;
        }

        this.restoreFocus = function() {

            this.params.dom.criteriaInput.focus();
        }

        this.releaseKeyboardOwnership = function() {

            Byte.Observer.Helpers.KeyboardOwner.setOwner(null);
        }

        this.attachObservers = function() {

            $(this.params.dom.criteriaInput).bind(this.params.events.keyboard.keypress,$.proxy(this.keyupObserver,this));
            $(this.params.dom.criteriaInput).bind(this.params.events.keyboard.keyup,$.proxy(this.keyupObserver,this));
        }

        this.detachObservers = function() {

            $(this.params.dom.criteriaInput).unbind();
        }

        this.buildDOM = function() {

            if ( !this.params.dom ) {

                this.params.dom = {};

                this.params.dom.container = $('<div>').addClass(this.params.css.container);
                this.params.dom.criteriaContainer = $('<div>').addClass(this.params.css.criteria);
                this.params.dom.criteriaInput = $('<input>').attr('type','text').attr('autocorrect','off').addClass(this.params.css.input);
                this.params.dom.cancel = $('<div>').addClass(this.params.css.cancel);
                this.params.dom.measure = $('<div>').addClass(this.params.css.measure);

                // input
                this.params.dom.criteriaContainer
                    .append(this.params.dom.criteriaInput)
                    .append(this.params.dom.cancel)
                    .append(this.params.dom.measure);

                // main container
                this.params.dom.container
                    .append(this.params.dom.criteriaContainer)

                // bind closure
                this.params.dom.cancel.bind('click',$.proxy(this.explicitExit,this));

                // append to body
                $('body').append(this.params.dom.container);
            }

            // hook up observers
            this.attachObservers();

            return this;
        }

        this.removeDOM = function() {

            if ( this.params.dom ) {

                this.detachObservers();
                this.params.dom.container.remove();
                this.params.dom = null;
                //this.attachMainObserver();
                this.releaseKeyboardOwnership();
            }

            return this;
        }

        this.syncInputWidth = function() {

            var width = this.params.dom.measure.html(this.params.dom.criteriaInput.val()).outerWidth(true) + 30;
            this.params.dom.criteriaInput.css({'width':width+'px'});

            this.filterContents(this.params.dom.criteriaInput.val());

            this.params.dom.container.css({'width':40+width+'px'});

            return this;
        }

        this.keypressObserver = function(e) {

            this.syncInputWidth();
        }

        this.checkCriteria = function() {

            var criteriaInput = this.params.dom.criteriaInput;

            if ( !criteriaInput.val().length ) {

                this.removeDOM();
            }
            else {
                criteriaInput.val(''); this.syncInputWidth();
            }
        }

        this.keyupObserver = function(e) {

            if ( e && e.keyCode ) {

                var criteria = this.params.dom.criteriaInput.val();

                switch ( true ) {

                    case /46|8/.test(e.keyCode):
                        this.syncInputWidth();
                        break;
                    case /27/.test(e.keyCode):
                        this.explicitExit();
                        break;
                    default: if ( criteria.length !== this.params.dom.measure.html().length ) {
                        this.syncInputWidth();
                    }
                }
            }
        }

        this.mainObserver = function(e) {

            if ( e.ctrlKey || ( e.keyCode && ( parseInt(e.keyCode) < 49 || parseInt(e.keyCode) > 111 )  ) ) {
                return;
            }

            if ( !this.getKeyboardOwnership() ) {

                return;
            }

            if ( !this.params.dom ) {

                this.buildDOM();
                this.params.dom.criteriaInput.focus();
            }

        }

        this.explicitExit = function() {
        }

        this.detachMainObserver = function() {
            $(window).unbind(this.params.events.keyboard.keypressInit);
        }

        this.attachMainObserver = function() {

            $(window).bind(this.params.events.keyboard.keypressInit,$.proxy(this.mainObserver,this));
        }

        return this;
    }

    Byte.Observer.Modules.GUI.Auxiliary.Search.View = function(view) {

        this.constructor(view);

        // main observer
        this.attachMainObserver();

        this.explicitExit = function() {

            this.removeDOM();
            this.filterContents('');
        }

        this.filterContents = function(criteria) {

            this.params.view.filter(criteria);

            return this;
        }

        return this;
    }


    Byte.Observer.Modules.GUI.Auxiliary.Search.View.prototype = new Byte.Observer.Modules.GUI.Auxiliary.Search.ViewBase();

    /* * * * * *
     *
     * Bytelight
     *
     * * * * * */

    Byte.Observer.Modules.GUI.Auxiliary.Search.Bytelight = function() {

        this.params = {
            dom: null,
            events: {
                keyboard: {
                    keyup: 'keyup.byte_observer_auxiliary_search_bytelight',
                    keydown: 'keydown.byte_observer_auxiliary_search_bytelight',
                    keydownInit: 'keydown.byte_observer_auxiliary_search_bytelight_init'
                },
                system: {
                    viewSwitch: 'byte_observer_view_switch'
                }
            },
            dom: null,
            criteria: '',
            css: {
                container: 'byte-observer-auxiliary-instant-view-search-bytelight',
                box: 'byte-observer-auxiliary-instant-view-search-bytelight-box',
                header: 'byte-observer-auxiliary-instant-view-search-bytelight-header',
                headerTitle: 'byte-observer-auxiliary-instant-view-search-bytelight-header-title',
                results: 'byte-observer-auxiliary-instant-view-search-bytelight-results',
                criteria: 'byte-observer-auxiliary-instant-view-search-bytelight-criteria',
                cancel: 'byte-observer-auxiliary-instant-view-search-bytelight-cancel icon-bytelight-remove',
                input: 'byte-observer-auxiliary-instant-view-search-bytelight-input'
             },
             modules: {
                 results: null
             }
        }

        this.toggleViewOpacity = function() {

            var viewLayer = $('div#byte-observer-view-layer');

            if ( viewLayer.hasClass('fade') ) {

                viewLayer.removeClass('fade');
            }
            else {
                viewLayer.addClass('fade');
            }
        }

        this.buildDOM = function() {

            if ( !this.params.dom ) {

                this.params.dom = {};

                this.params.dom.container = $('<div>').addClass(this.params.css.container);
                // bytelight actual container box
                this.params.dom.box = $('<div>').addClass(this.params.css.box);
                // header
                this.params.dom.header = $('<div>').addClass(this.params.css.header);
                // results
                this.params.dom.results = $('<div>').addClass(this.params.css.results);
                // header title
                this.params.dom.headerTitle = $('<div>').addClass(this.params.css.headerTitle).html('Bytelight').attr('title','Good artists copy, great artists steal!');
                this.params.dom.criteriaContainer = $('<div>').addClass(this.params.css.criteria);
                this.params.dom.criteriaInput = $('<input>').attr('type','text').attr('autocorrect','off').addClass(this.params.css.input).attr('value','');
                this.params.dom.cancel = $('<div>').addClass(this.params.css.cancel);


                // build criteria
                this.params.dom.criteriaContainer
                        .append(this.params.dom.criteriaInput)
                        .append(this.params.dom.cancel);

                // build header
                this.params.dom.header
                    .append(this.params.dom.criteriaContainer)
                    .append(this.params.dom.headerTitle);

                // input
                this.params.dom.box
                    .append(this.params.dom.header)
                    .append(this.params.dom.results);
                    //.append(

                // main container
                this.params.dom.container
                    .append(this.params.dom.box)

                // bind closure
                this.params.dom.cancel.bind('click',$.proxy(this.checkCriteria,this));

                // append to body
                $('body').append(this.params.dom.container);
            }

            // hook up observers
            this.attachObservers();

            // keep focus
            this.params.dom.container.bind('click',$.proxy(this.returnFocus,this));

            // set results object
            this.params.modules.resultsList.setParentDOMElement(this.params.dom.results);

            return this;
        }

        this.clearHighlightedResult = function() {

            this.params.modules.resultsList.setHighlightedResult(null,null);
        }

        this.returnFocus = function(e) {

            this.clearHighlightedResult();
            this.params.dom.criteriaInput[0].focus();
        }

        this.getKeyboardOwnership = function() {

            var currentOwner = Byte.Observer.Helpers.KeyboardOwner.getOwner();

            if ( !currentOwner ) {

                currentOwner = this;
                Byte.Observer.Helpers.KeyboardOwner.setOwner(currentOwner);
            }

            return currentOwner === this;
        }

        this.releaseKeyboardOwnership = function() {

            Byte.Observer.Helpers.KeyboardOwner.setOwner(null);
        }

        this.removeDOM = function() {

            if ( this.params.dom ) {

                this.detachObservers();
                this.params.dom.container.remove();
                this.params.dom = null;
                this.releaseKeyboardOwnership();
                this.toggleViewOpacity();
            }

            return this;
        }

        this.checkCriteria = function() {

            var criteriaInput = this.params.dom.criteriaInput;

            if ( !criteriaInput.val().length ) {

                this.removeDOM();
            }
            else {
                criteriaInput.val('').blur().focus();
                this.clearSearchResults();
            }
        }

        this.highlightResults = function(keyCode) {

            var direction;

            switch ( true ) {

                case /39|40/.test(keyCode):
                    direction = 1
                    break;
                case /37|38/.test(keyCode):
                    direction = -1
                    break;
                default: break;
            }

            this.params.modules.resultsList.highlightResult(direction);
        }

        this.keydownObserver = function(e) {

            if ( e && e.keyCode ) {

                switch ( true ) {

                    case /^37|38|39|40$/.test(e.keyCode):
                        e.preventDefault();
                        this.highlightResults(e.keyCode);
                        break;
                    case /^13$/.test(e.keyCode):
                        e.preventDefault();
                        // todo
                        this.params.modules.resultsList.switchToEntity();
                        break;
                    default: break;
                }
            }
        }

        this.keyupObserver = function(e) {

            if ( e && e.keyCode ) {

                var criteria = this.params.dom.criteriaInput.val();

                switch ( true ) {

                    case /27/.test(e.keyCode):
                        e.preventDefault();
                        this.checkCriteria();
                        //this.params.dom.criteriaInput[0].value = '';
                        break;
                    default: this.getBytelightResults(criteria);
                }
            }
        }

        this.foo = function(listData) {

            this.params.modules.resultsList.clearList().buildList(listData);
        }

        this.getBytelightResults = function(criteria) {

            criteria = criteria.trim();

            if ( this.params.criteria === criteria ) {

                return;
            }

            this.params.criteria = criteria;

            if ( criteria.length ) {

                this.params.modules.results.fetchBytelightResults(criteria);
            }
            else {
                this.clearSearchResults();
            }
        }

        this.clearSearchResults = function() {

            this.params.modules.resultsList.clearList();
            this.params.criteria = null;
        }

        this.detachObservers = function() {

            return this;
        }

        this.attachObservers = function() {

            $(this.params.dom.criteriaInput).bind(this.params.events.keyboard.keyup,$.proxy(this.keyupObserver,this));
            $(this.params.dom.criteriaInput).bind(this.params.events.keyboard.keydown,$.proxy(this.keydownObserver,this));

            return this;
        }

        this.checkInitEvent = function(e) {

            return ( e && e.hasOwnProperty('keyCode') && e.keyCode === 70 && e.ctrlKey );
        }

        this.mainObserver = function(e) {

            // if it's our starting event (ctrl+f) and we can claim keyboard
            if ( this.checkInitEvent(e) ) {

                // prevent default browser's search func
                e.preventDefault();

                if ( this.getKeyboardOwnership() ) {

                    // if there's no DOM, build it
                    if ( !this.params.dom ) {

                        this.buildDOM();
                        this.toggleViewOpacity();
                        this.params.dom.criteriaInput.focus();
                    }
                }
            }
        }

        this.attachMainObserver = function() {

            $(window).bind(this.params.events.keyboard.keydownInit,$.proxy(this.mainObserver,this));
            $(window).bind(this.params.events.system.viewSwitch,$.proxy(this.removeDOM,this));
            // fetcher
            this.params.modules.results = new Byte.Observer.Modules.Backend.Bytelight.Results({object:this,method:this.foo});
            this.params.modules.resultsList = new Byte.Observer.Modules.GUI.Auxiliary.Search.Results();

            return this;
        }

        this.detachMainObserver = function() {

            $(window).unbind(this.params.events.keyboard.keydownInit);
            return this;
        }

        return this.attachMainObserver();
    }

    Byte.Observer.Modules.GUI.Auxiliary.Search.Details = function() {

        this.params = {
            dom: {
                providerDomElement: null,
                container: null
            },
            details: null,
            css: {
                hide: 'hide',
                container: 'byte-observer-gui-auxiliary-search-details-container',
                tipU: 'byte-observer-gui-auxiliary-search-details-tip-u',
                tipL: 'byte-observer-gui-auxiliary-search-details-tip-l',
                details: 'byte-observer-gui-auxiliary-search-details-details'
            }
        }

        this.setDataProvider = function(domElement,details) {

            this.params.details = details;
            this.params.dom.providerDomElement = domElement;

            // display it
            if ( details ) {

                this.displayData();
            }
            else {
                this.clearDOM();
            }
        }

        this.buildDOM = function() {

            if ( !this.params.dom.container ) {

                this.params.dom.container = $('<div>').addClass(this.params.css.container);
                this.params.dom.tipU = $('<div>').addClass(this.params.css.tipU)
                this.params.dom.tipL = $('<div>').addClass(this.params.css.tipL);
                this.params.dom.details = $('<div>').addClass(this.params.css.details)
                this.params.dom.type = $('<div>');
                this.params.dom.match = $('<div>');

                this.params.dom.details
                    .append(this.params.dom.type)
                    .append(this.params.dom.match);

                // append to body
                $('body')
                    .append(this.params.dom.container
                        .append(this.params.dom.tipU)
                        .append(this.params.dom.tipL)
                        .append(this.params.dom.details));
            }

            return this;
        }

        this.displayData = function() {

            this.params.dom.type.html(this.params.details.type);
            this.params.dom.match.html(this.params.details.abstract.replace(/\{{2}/,'<b>').replace(/\}{2}/,'</b>'));

            // position
            var offset = this.params.dom.providerDomElement.offset();
            var left = offset.left - ( this.params.dom.container.outerWidth(true) );
            var top = offset.top;
            var elHeight = this.params.dom.providerDomElement.outerHeight(true);
            var ownHeight = this.params.dom.container.outerHeight(true);

            var offsetTop = top + elHeight/2 - ownHeight/2;

            // set position and show it
            this.params.dom.container.css({
                'left' : left,
                'top' : offsetTop,
                'display' : 'block'
            });
        }

        this.dropData = function() {

            this.params.details = null;
            this.params.dom.providerDomElement = null;

            return this;
        }

        this.clearDOM = function() {

            // remove dom
            if ( this.params.dom.container ) {

                this.params.dom.type.html('');
                this.params.dom.match.html('');
                this.params.dom.container.removeAttr('style');
            }

            // remove data
            this.dropData();

            return this;
        }

        // pre-build stuff
        return this.buildDOM();
    }

    Byte.Observer.Modules.GUI.Auxiliary.Search.Results = function() {

        this.params = {
            dom: {
                parentDOMElement: null,
                list: null,
                noResults: '<div class="byte-observer-auxiliary-search-results-no-results">No Results</div>'
            },
            events: {
                system: {
                    viewSwitch: 'byte_observer_view_switch'
                }
            },
            resultSelected: null,
            results: null,
            itemsCounter: null,
            css: {
                groupContainer: 'byte-observer-auxiliary-search-results-group',
                groupLabel: 'byte-observer-auxiliary-search-results-group-label',
                groupResults: 'byte-observer-auxiliary-search-results-group-results',
                groupResult: 'byte-observer-auxiliary-search-results-group-result',
                firstRow: 'byte-observer-auxiliary-search-results-group-result-first',
                secondRow: 'byte-observer-auxiliary-search-results-group-result-second',
                resultSelected: 'byte-observer-auxiliary-search-results-selected',
                groupStarts: 'byte-observer-auxiliary-search-results-group-start'
            },
            modules: {
                details: null
            }
        }

        this.switchToEntity = function() {

            var entity = this.getHighlightedResult();

            if ( entity && entity.data ) {

                var obj = {};

                    obj.type = entity.data.view;

                if ( entity.data.parents ) {

                    obj.childId = entity.data.fullname;
                }

                obj.id = ( obj.childId ) ? entity.data.parents.shift() : entity.data.fullname;

                this.params.modules.details.clearDOM();

                $(window).trigger(this.params.events.system.viewSwitch,[obj]);
            }
        }

        this.setParentDOMElement = function(el) {

            this.params.dom.parentDOMElement = el;
        }

        this.clearList = function() {

            var listDOM = this.params.dom.list;

            if ( listDOM ) {

                this.params.modules.details.clearDOM();
                listDOM.remove();
                this.resetResults();
            }

            return this;
        }

        this.resetResults = function() {

            this.params.results = new Array();
            this.params.resultSelected = null;
            this.params.modules.details.clearDOM();

            return this;
        }

        this.buildSearchResult = function(label,entity) {

            // container
            var groupContainer = $('<div>').addClass(this.params.css.groupContainer);
            var listResult = $('<div>').addClass(this.params.css.groupResults);
            var resultLabel = $('<div>').addClass(this.params.css.groupLabel).html( ( label ) ? label : '&nbsp;');
            var resultData = $('<div>').addClass(this.params.css.groupResult);

            groupContainer
                .append(resultLabel)
                .append(listResult
                    .append(resultData));

            if ( entity ) {

                var firstRow = $('<div>').addClass(this.params.css.firstRow);
                var parent = $('<div>');
                var fullname = $('<div>').html('<b>' + entity.fullname + '<b>');

                if ( entity.hasOwnProperty('parents') && entity.parents.length ) {
                    parent.html(entity.parents.reverse().join(' &rarr; '));
                }

                firstRow
                    .append(fullname)
                    .append(parent);

                resultData.append(firstRow);

                this.params.results.push({dom: groupContainer, data: entity});

                entity.id = this.params.results.length - 1;
            }
            else {
                groupContainer.addClass(this.params.css.groupStarts);
            }

            // hook up mouse
            groupContainer.bind('mouseover',$.proxy(this.setHighlightedResult,this,this.params.itemsCounter++));
            // click > switch
            groupContainer.bind('click',$.proxy(this.switchToEntity,this));

            return groupContainer;
        }

        this.setHighlightedResult = function(id,e) {

            if ( this.params.resultSelected !== id ) {

                this.toggleHighlight(false);
                this.params.resultSelected = id;
                this.toggleHighlight(id !== null);
            }
        }

        this.buildGroup = function(groupObject) {

            var entities = groupObject.entities;

            if ( entities && entities.length ) {

                this.params.dom.list.append(this.buildSearchResult(groupObject.label,entities[0]));

                for ( var i = 1, len = entities.length; i < len; i++ ) {

                    this.params.dom.list.append(this.buildSearchResult(null,entities[i]));
                }
            }

            return this;
        }

        this.buildList = function(listData) {

            // clear the list
            this.resetResults();

            if ( listData ) {

                // create container
                this.params.dom.list = $('<div>');

                this.params.itemsCounter = 0;

                if ( listData.length ) {

                    for ( var i = 0, len = listData.length; i < len; i++ ) {

                        this.buildGroup(listData[i]);
                    }

                    this.params.dom.parentDOMElement.append(this.params.dom.list);
                }

                else {
                    this.params.dom.parentDOMElement.append(this.params.dom.list.html(this.params.dom.noResults));
                }

                this.params.itemsCounter = null;
            }

            return this;
        }

        this.highlightResult = function(direction) {

            if ( !this.params.results ) {

                return;
            }

            this.toggleHighlight(false);

            if ( this.params.resultSelected === null ) {

                this.params.resultSelected = 0;
            }
            else {
                this.params.resultSelected += direction;
            }

            this.params.resultSelected = ( this.params.resultSelected >= this.params.results.length ) ? 0 : this.params.resultSelected;
            this.params.resultSelected = ( this.params.resultSelected < 0 ) ? this.params.results.length - 1 : this.params.resultSelected;

            this.toggleHighlight();
        }

        this.getHighlightedResult = function() {

            return ( this.params.resultSelected !== null ) ? this.params.results[this.params.resultSelected] : null;
        }

        this.toggleHighlight = function(on) {

            on = ( typeof on === 'boolean' ) ? on : true;
            var highlightedElement = this.getHighlightedResult();
            var cssClass = this.params.css.resultSelected;

            if ( highlightedElement && highlightedElement.hasOwnProperty('dom') ) {

                if ( !on ) {

                    highlightedElement.dom.removeClass(cssClass);
                    this.params.modules.details.clearDOM();
                }
                else {

                    highlightedElement.dom.addClass(cssClass);

                    if ( highlightedElement.data.hasOwnProperty('match') ) {

                        this.params.modules.details.setDataProvider(highlightedElement.dom, highlightedElement.data.match);
                    }
                }
            }
        }

        // init details
        this.params.modules.details = new Byte.Observer.Modules.GUI.Auxiliary.Search.Details();

        return this;
    }

    Byte.Observer.Modules.Backend.Bytelight.Results = function(callback) {

        this.params = {

            xhr: null,
            uri: {
                api: 'backend/api.php'
            },
            callback: callback
        }

        this.cancelOngoingRequest = function() {

            if ( this.params.xhr ) {

                try {
                    this.params.xhr.abort();
                }
                catch (e) {
                }
            }

            return this;
        }

        this.provideResults = function(results) {

            this.params.callback.method.apply(this.params.callback.object,[results]);
        }

        this.fetchBytelightResults = function(criteria) {

            // cancel any ongoing request
            this.cancelOngoingRequest();

            this.params.xhr = Byte.Observer.Modules.Transport.request({

                uri: this.params.uri.api,
                data: {bytelight: criteria},
                callback: {
                    method: this.provideResults,
                    object: this,
                }
            });
        }

        return this;
    }

    Byte.Observer.Modules.GUI.Buttons.ParentEntity = function(entity) {

        this.params = {
            entity: entity,
            dom: null,
            events: {
                switchView: 'byte_observer_view_switch'
            },
            title: 'Parent {1}'
        }

        this.entityObserver = function(e) {

            $(window).trigger(this.params.events.switchView,[{type: this.params.entity.type,id: this.params.entity.id}]);
            return false;
        }

        this.attachObserver = function() {

            if ( this.params.entity ) {
                this.params.dom.bind('click',$.proxy(this.entityObserver,this));
            }
        }

        this.getDOM = function() {

            this.params.dom = $('<div>').html(this.params.title.replaceTokens(this.params.entity.type.capitalize()));
            this.attachObserver();

            return this.params.dom;
        }

        return this;
    }

    Byte.Observer.Modules.GUI.Buttons.SwitchToView = function(entity) {

        this.params = {
            entity: entity,
            dom: null,
            events: {
                switchView: 'byte_observer_view_switch'
            },
            css: {
                main: 'byte-observer-model-gui-button-entity-details',
                details: 'icon-white'
            }
        }

        this.entityObserver = function(e) {

            $(window).trigger(this.params.events.switchView,[{type: this.params.entity.getType(),id: this.params.entity.getFullname()}]);
            return false;
        }

        this.getData = function() {

            return this.params.data;
        }

        this.attachObserver = function() {

            this.params.dom.bind('click',$.proxy(this.entityObserver,this));
        }

        this.getDOM = function() {

            this.params.dom = $('<div>').addClass(this.params.css.main);
            this.params.dom.detailsContainer = $('<div>');
            this.params.dom.details = $('<div>').addClass(this.params.css.details);

            this.params.dom.append(this.params.dom.detailsContainer.append(this.params.dom.details));

            this.attachObserver();

            return this.params.dom;
        }

        return this;
    }


    /* MODELS */
    Byte.Observer.Models.Details.Nse = function() {

        this.params = {

            dom: null,
            events: {
                modelReady: 'byte_observer_model_details_{1}_{2}_ready'
            },
            entityType: 'nse'
        }

        this.getModelUI = function() {

            return this.params.dom;
        }

        this.setEntity = function(entity) {

            this.params.entity = entity;
            this.params.entityType = entity.getType();
            this.params.entityId = entity.getId();

            return this;
        }

        this.notifyModelReady = function() {

            $(window).trigger(this.params.events.modelReady.replaceTokens(this.params.entityType,this.params.entityId));
        }

        this.loadModelData = function() {

            this.processModelData();
        }

        this.processModelData = function() {

            this.buildModelUI();
            this.notifyModelReady();

            return this;
        }

        this.getModelUI = function() {

            return this.params.dom;
        }

        this.buildModelUI = function() {

            this.params.dom = $('<div>');
            this.params.dom.html('This entity is not yet supported.');
        }

        return this;
    }

    Byte.Observer.Models.Details.Base = function() {

        this.params = {

            uri: {
                api: 'backend/api.php'
            },
            data: null,
            dom: null,
            events: {
                modelReady: 'byte_observer_model_details_{1}_{2}_ready'
            }
        }

        this.setEntity = function(entity) {

            this.params.entity = entity;
            this.params.entityType = entity.getType();
            this.params.entityId = entity.getId();

            return this;
        }

        this.getModelUI = function() {

            return this.params.dom;
        }

        this.notifyModelReady = function() {

            $(window).trigger(this.params.events.modelReady.replaceTokens(this.params.entityType, this.params.entityId));
        }

        this.loadModelData = function() {

            Byte.Observer.Modules.Transport.request({

                uri: this.params.uri.api,
                data: {details: this.params.entityType, id: this.params.entityId},
                callback: {
                    method: this.processModelData,
                    object: this,
                }
            });
        }

        this.processModelData = function(data) {

            this.params.data = data;
            this.buildModelUI();
            this.notifyModelReady();

            return this;
        }

        return this;
    }

    Byte.Observer.Models.Details.Generic = function() {

        this.constructor();

        this.buildModelUI = function() {

            this.params.dom = $('<div>');

            var html = '';

            var data = this.params.data;

            for ( i in data ) {

                if ( data[i] ) {
                    html += '<div><span style="display:inline-block;min-width:150px;margin: 0px 20px 2px 0px; "><b>' + i.toString().replace(/_/,' ').capitalize() + '</b></span><span>' + data[i].toString() + '</span></div>';
                }
            }

            this.params.dom.html(html);
        }

        return this;
    }
    Byte.Observer.Models.Details.Generic.prototype = new Byte.Observer.Models.Details.Base();

    /*** EXTRAS ***/
    // default classes extensions
    String.prototype.capitalize = function(){
        return this.replace( /(^|\s)([a-z])/g , function(m,p1,p2){ return p1+p2.toUpperCase(); } );
    };
    // default classes extensions
    String.prototype.replaceTokens = function(){

        var string = this;

        for ( var i = 0, len = arguments.length; i < len; i++) {

            // if string or number
            if ( arguments[i] !== null && arguments[i] !== undefined && ( arguments[i].constructor && arguments[i].constructor.toString().match(/string/i) || arguments[i].constructor.toString().match(/number/i) ) ) {

                string = string.replace("{" + ++i + "}", arguments[--i]);
            }
            // return as is
            else {

                return this;
            }
        }

        return string;
    };

    String.prototype.trim = function() {
        return this.replace(/^\s+|\s+$/g,"");
    }
    String.prototype.ltrim = function() {
        return this.replace(/^\s+/,"");
    }
    String.prototype.rtrim = function() {
        return this.replace(/\s+$/,"");
    }

    RegExp.quote = function(str) {
        return (str+'').replace(/(\<\>[.?*+^$[\]\\(){}|-])/g, "\\$1");
    };

