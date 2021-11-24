/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**************************************!*\
  !*** ./resources/js/sendingGrade.js ***!
  \**************************************/
jQuery(document).ready(function ($) {
  $('select').change(function () {
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        'Authorization': 'Bearer ' + $('meta[name="api_token"]').attr('content')
      }
    });
    var select = $(this);
    var sendStruct = {};
    sendStruct.GUIDSheet = $(this).attr('attr-guid-sheet');
    sendStruct.GUIDStudent = $(this).attr('attr-guid-student');
    sendStruct.GUIDGrade = $(this).val();
    $.ajax({
      url: '/api/sheets/sheets_grade',
      data: sendStruct,
      method: "POST",
      success: function success(answer_json) {
        var answer = answer_json;

        if (answer.success) {
          $(select).closest("tr").css({
            'backgroundColor': '#bafaa5'
          });
        } else {
          $(select).val("");
          alert("произошла ошибка! " + answer.error);
          $(select).closest("tr").css({
            'backgroundColor': '#e31735'
          });
        }
      }
    });
  });
});
/******/ })()
;