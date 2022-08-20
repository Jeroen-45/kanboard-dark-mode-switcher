function DarkModeSwitcherUpdate(button) {
    $.ajax({
        cache: false,
        url: $(button).data("update-url"),
        contentType: "application/json",
        type: "POST",
        processData: false,
        data: JSON.stringify({}),
        success: function(data) {
            document.location.reload(true);
        }
    });
}