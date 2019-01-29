jQuery( document ).ready(function(){

   "use strict";
 
   if( typeof jQuery.wp === 'object' && typeof jQuery.wp.wpColorPicker === 'function' ){
      jQuery( '#color' ).wpColorPicker();
   } 
} );
