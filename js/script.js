$(document).ready(function() {
  // show loader image
  $('#loaderImage').show();

  //display contacts
  showContacts();

  //add contact
  $(document).on('submit','#addContact', function() {
    // show loader image
    $('#loaderImage').show();

    // post data from form
    $.post("add_contact.php", $(this).serialize())
        .done(function(data){
          $('#myModal').foundation('reveal','close');
          showContacts();
        });

    return false;
  });
});


function showContacts() {
  setTimeout("$('#pageContent').load('contacts.php')", function(){
    $('#loaderImage').hide();},
    1500);
}