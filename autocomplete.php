<!--style-->
<style>
  .ui-autocomplete-loading {
    background: white url("images/ui-anim_basic_16x16.gif") right center no-repeat;
    
  }
  .ui-autocomplete {
    max-height: 100px;
    max-width: 525px;
    overflow-y: auto;
    /* prevent horizontal scrollbar */
    overflow-x: hidden;
  }
  /* IE 6 doesn't support max-height
   * we use height instead, but this forces the menu to always be this tall
   */
  * html .ui-autocomplete {
    height: 100px;
    width: 100px;
  }
</style>





<script>
  $( function() {
    function split( val ) {
      return val.split( /,\s*/ );
    }
    function extractLast( term ) {
      return split( term ).pop();
    }
 
    $( "#main" )
      // don't navigate away from the field on tab when selecting an item
      .on( "keydown", function( event ) {
        if ( event.keyCode === $.ui.keyCode.TAB &&
            $( this ).autocomplete( "instance" ).menu.active ) {
          event.preventDefault();
        }
      })
      .autocomplete({
        source: function( request, response ) {
            if (request.term.length <4){
                $.getJSON( "autocomplete_search_less4.php", {
            term: extractLast( request.term )
          }, response );
            }
            else {
                $.getJSON( "autocomplete_search_more4.php", {
            term: extractLast( request.term )
          }, response );
                
            }
          
        },
//        search: function() {
//          // custom minLength
//          var term = extractLast( this.value );
//          if ( term.length < 4 ) {
//            return false;
//          }
//        },
        focus: function() {
          // prevent value inserted on focus
          return false;
        }
      });
  } );
  </script>
<script>
  $( function() {
    function split( val ) {
      return val.split( /,\s*/ );
    }
    function extractLast( term ) {
      return split( term ).pop();
    }
 
    $( "#problem" )
      // don't navigate away from the field on tab when selecting an item
      .on( "keydown", function( event ) {
        if ( event.keyCode === $.ui.keyCode.TAB &&
            $( this ).autocomplete( "instance" ).menu.active ) {
          event.preventDefault();
        }
      })
      .autocomplete({
        source: function( request, response ) {
            if (request.term.length <4){
                $.getJSON( "autocomplete_search_less4.php", {
            term: extractLast( request.term )
          }, response );
            }
            else {
                $.getJSON( "autocomplete_search_more4.php", {
            term: extractLast( request.term )
          }, response );
                
            }
          
        },
//        search: function() {
//          // custom minLength
//          var term = extractLast( this.value );
//          if ( term.length < 4 ) {
//            return false;
//          }
//        },
        focus: function() {
          // prevent value inserted on focus
          return false;
        }
      });
  } );
  </script>
