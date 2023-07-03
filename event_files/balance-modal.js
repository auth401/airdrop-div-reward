(function($) {
  'use strict';
  $('#qrcodemodal').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var qrcode = button.data('qrcode')
    var addresstype = button.data('addresstype')
    var modal = $(this)
    modal.find('.modal-title').text(addresstype + ' Address QR Code')
    modal.find('.modal-body img').attr("src", 'https://chart.googleapis.com/chart?chs=250&cht=qr&chl=' + qrcode)
  })
})(jQuery);