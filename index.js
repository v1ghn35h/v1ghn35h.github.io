

function get_quote () {
    var quote_box = document.getElementById("random-quote-box")
    console.log(quote_box)
    console.log(quote_box.style)

    // make quote box visible
    quote_box.style = "" 
    
    let url = "https://api.quotable.io/random"
    axios.get(url)
        .then(response => {
            console.log(response.data);
            console.log(response.data);
            var author = response.data.author
            var quote = response.data.content

            //update quote
            var quote_para = document.getElementById('random-quote-text')
            quote_para.innerText = quote

            //update author
            var author_footer = document.getElementById('random-quote-author')
            author_footer.innerText = "~ " + author
        })
        .catch( error => {
            console.log(error.message);
        });

}