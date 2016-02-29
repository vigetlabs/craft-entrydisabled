$(document).ready(function() {
  var $lightswitch = $('#enabled-field .lightswitch');

  $lightswitch.find('.lightswitch').removeClass('on').addClass('off');
  $lightswitch.find('input[name="enabled"]').val('');
});
