define([
    "dojo","dojo/_base/declare",
    "ebg/core/gamegui",
    "ebg/counter",
    "ebg/stock"
],
function (dojo, declare) {
    return declare("bgagame.lakshadweepgame", ebg.core.gamegui, {
        constructor: function(){
            console.log('lakshadweepgame constructor');
              
            this.cardwidth = 72;
            this.cardheight = 96;
        },

        setup : function(gamedatas) {
            console.log("Starting game setup");
            dojo.connect( this.playerHand, 'onChangeSelection', this, 'onPlayerHandSelectionChanged' );

            this.setupNotifications();

            console.log( "Ending game setup" );




        }


    })
})
