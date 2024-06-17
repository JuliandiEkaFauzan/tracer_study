$(document).ready(function () {
  $("#hasil_survey").DataTable({
    dom: "Bfrtip",
    buttons: [
      {
        extend: "collection",
        text: "Export",
        buttons: [
          { extend: "csv", text: "Export to CSV" },
          { extend: "excel", text: "Export to Excel" },
          { extend: "pdf", text: "Export to PDF" },
        ],
      },
    ],
  });
});
