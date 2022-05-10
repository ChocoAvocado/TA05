window.deleteUser = function(_btn){
  var modalDialog = $(_btn).closest('.modal-dialog')
  modalDialog.find('form').submit();
  return false;
}