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

  //edit contact
  $(document).on('submit','#editContact', function() {
    // show loader image
    $('#loaderImage').show();

    // post data from form
    $.post("edit_contact.php", $(this).serialize())
        .done(function(data){
          console.log(data);
          $('.editModal').foundation('reveal','close');
          showContacts();
        });

    return false;
  });

    //delete contact
  $(document).on('submit','#deleteContact', function() {
    // show loader image
    $('#loaderImage').show();

    // post data from form
    $.post("delete_contact.php", $(this).serialize()).done(function(data){
          console.log(data);
          showContacts();
        });

    return false;
  });
});

$(document).on('click','.close-reveal-modal', function(){
  $('.reveal-modal').foundation('reveal', 'close');
});

function showContacts() {
  setTimeout("$('#pageContent').load('contacts.php')", function(){
    $('#loaderImage').hide();},
    1500);
}

