$(document).ready(function () {
  $("#searchForm").on("submit", function (e) {
    e.preventDefault();
    const categoryId = $("#category").val();

    $.ajax({
      url: "../../index.php",
      type: "get",
      data: {
        controller: "HomeController",
        action: "search",
        category: categoryId,
      },
      success: function (response) {
        $("#searchModal .modal-body").html(response);
        const modal = new bootstrap.Modal(
          document.getElementById("searchModal")
        );
        modal.show();
      },
      error: function (xhr, status, error) {
        console.error("Search error:", error);
        alert("Có lỗi xảy ra khi tìm kiếm");
      },
    });
  });
});
