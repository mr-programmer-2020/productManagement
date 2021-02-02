$(document).ready(function(){
    showOption('DVD')
})
$("#categorySelect").on('change',function(e){
    let option = $("#categorySelect").val()
    showOption(option)
})
function showOption(option){
    $(".prodouctDynamicItem").hide()
    $(`#${option}`).show()
}