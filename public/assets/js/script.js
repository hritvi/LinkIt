function link_vote(id)
{
    event.preventDefault();
    var xhttp = new XMLHttpRequest();
    xhttp.open("POST","/upvotes",true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('linkid='+id);
    document.location.reload();
}

function comment_vote(id)
{
    console.log(id)
    event.preventDefault();
    var xhttp = new XMLHttpRequest();
    xhttp.open("POST","/commentupvote",true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('commentid='+id);
    document.location.reload();
}
