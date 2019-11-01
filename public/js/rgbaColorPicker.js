$(function () {
      // Basic instantiation:
      $('#demo').colorpicker();
      
      // Example using an event, to change the color of the .jumbotron background:
      $('#demo').on('colorpickerChange', function(event) {
        $('.jumbotron').css('background-color', event.color.toString());
      });
});