<script>
var list = document.querySelector( '[role="tablist"]' );
var tablist = new Tablist( list );

// il est possible d'ajouter des écouteurs sur l'ouverture et la fermeture des onglets
tablist.on( 'show', function( tab, tabPanel ){
});

tablist.on( 'hide', function( tab, tabPanel ){

});

// démarage du plugin
tablist.mount();
</script>