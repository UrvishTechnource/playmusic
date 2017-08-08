define([
  'jquery',
  'Vsourz_HotDeals/js/owlCarousel-1'
], function($){
 'user strict'
  return function (config, element) {
   $(element).owlCarousel(config);
  }
});