$(document).ready(function() {
    "use strict";

    $('#contactModal').on('show.bs.modal', function (e) {
      $('body').addClass('contact_modal-open');
    });
    $('#contactModal').on('shown.bs.modal', function (e) {
      $('.cf-name').trigger('focus');
    });
    $('#contactModal').on('hide.bs.modal', function (e) {
      $('body').removeClass('contact_modal-open');
    });

});

