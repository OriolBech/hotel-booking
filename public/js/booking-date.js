$( document ).ready(function() {
$( function() {
  var dateToday = new Date();
  var dates = $("#entrada, #sortida").datepicker({
    defaultDate: "+2d",
    changeMonth: true,
    numberOfMonths: 2,
    minDate: dateToday,
    onSelect: function(selectedDate) {
        var option = this.id == "entrada" ? "minDate" : "maxDate",
        instance = $(this).data("datepicker"),
        date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
        dates.not(this).datepicker("option", option, date);
    }
  });
});
});