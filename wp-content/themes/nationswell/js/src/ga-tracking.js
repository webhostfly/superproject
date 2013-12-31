(function(){
    function track() {
        if (typeof _gaq != "undefined") {
            var event = ['_trackEvent'], i, n;
            for(i = 0, n = arguments.length; i < n; i++){
                if(arguments[i] !== undefined) {
                    event.push(arguments[i]);
                }
            }
            console.log(event);
            _gaq.push(event);
        }
    }

    events.on('track', function(e, data) {
        track(data.moduleName, data.action, data.label || data.url, data.value || data.position);
    });

    events.on('nav-open', function(){
        track('nav', 'open', 'top-nav');
    });

    events.on('nav-search-open', function(e, module){
        track(module.name, 'open', 'search');
    });


    events.on('nav-more-stories-open', function(e, module){
        track(module.name, 'open', 'more-stories');
    });


    events.on('nav-subscribe-open', function(e, module){
        track(module.name, 'open', 'subscribe');
    });

    events.on('newsletter-subscribed', function(e, module){
        track(module.name, 'subscribe', 'success');
    });

    events.on('newsletter-subscribe-fail', function(e, module, resp){
        track(module.name, 'subscribe', 'fail');
    });

    events.on('modal-open', function(e, name){
        track("modal:" + name, "open");
    });

    events.on('modal-close', function(e, name){
        track("modal:" + name, "close");
    });

    events.on('modal-disable', function(e, name){
        track("modal:" + name, "disable");
    });
})();
