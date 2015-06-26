
var blog = [
    {
        "title": "First Blog Post",
        "subtitle": "JSON, Bootstrap and DOT Notation trying to work together",
        "date": "2015-02-19",
        "author": "Benny Cardenas",
        "image": "http://www.someimagehere.com/image.jpg",
        "tags": [
            "Web",
            " Design",
            " HTML"
        ],
        "category": "development",
        "post": "lorem ipsum"
    },
    {
        "title": "This one was easier",
        "subtitle": "Things are KINDA clicking",
        "date": "2015-02-19",
        "author": "B. Cardenas",
        "tags": [
            "crtl+c",
            " hr tags was actually taking here!",
            " Bootstrap"
        ],
        "category": "Development",
        "post": "lorem ipsum dolor and stuff here"
    }
];

var post = document.getElementById('post');

var htmlString = '';

	for(var i = 0; i < blog.length; i++) {
		htmlString += '<h2 class="post-title">' + blog[i].title + '</h2>';
		htmlString += '<h4 class="post-subtitle">' + blog[i].subtitle + '</h4>';
		htmlString += '<p class="post-meta post-date">' + blog[i].post + '</p>';
		htmlString += '<p class="post-tags">' + 'Tags: ' + blog[i].tags + '</p>';
		htmlString += '<p class="category">' + 'Category: ' + blog[i].category + '</p>';

}


post.innerHTML = htmlString;

// <h2 class="post-title">First Blog I Created</h2><p class="post-meta post-date">lorem ipsum dolor and stuff here</p><h2 class="post-title">Hehehehe...This one was easier</h2><p class="post-meta post-date">lorem ipsum dolor and stuff here</p>



// console.log(htmlString);

// <a href="post.html">
//                         <h2 class="post-title">
                            
//                         </h2>
//                         <h3 class="post-subtitle">
//                             Problems look mighty small from 150 miles up
//                         </h3>
//                     </a>
//                     <br>
//                     <p class="post-author"></p>
//                         <p class="post-meta post-date">Posted by <a href="#">Start Bootstrap</a> on September 24, 2014</p>
//                         <p>Tags:</p>
//                             <p class="post-tags">yeah</p>
//                         <p>Category:</p>
//                             <p class="category">Category goes here.</p>

// var postTitle = document.getElementsByClassName('post-title');
// var postDate = document.getElementsByClassName('post-date');
// var postAuthor = document.getElementsByClassName('post-author');
// var postTags = document.getElementsByClassName('post-tags');
// var postCategory = document.getElementsByClassName('category');
// var postSubtitle = document.getElementsByClassName('post-subtitle');
// var picture = document.

// // FIRST POST

// postTitle[0].innerHTML = blog[0]['title'];
// postDate[0].innerHTML = blog[0].date;
// postAuthor[0].innerHTML = blog[0].author;
// postTags[0].innerHTML = blog[0]['tags'];
// postCategory[0].innerHTML = blog[0].category;
// postSubtitle[0].innerHTML = blog[0].subtitle;

// // SECOND POST

// postTitle[1].innerHTML = blog[1]['title'];
// postDate[1].innerHTML = blog[1].date;
// postAuthor[1].innerHTML = blog[1].author;
// postTags[1].innerHTML = blog[1]['tags'];
// postCategory[1].innerHTML = blog[1].category;
// postSubtitle[1].innerHTML = blog[1].subtitle;


// // Paula's Solution
// var postString = "one";
// function isWholePost(){
// 	for (var i=0; i<blog.length; i++) {	
// 		postString += blog[i].title + blog[i].post
// }
// }

// isWholePost(blog);







// var firstTitle = document.getElementById('first_title');
// firstTitle.innerHTML = title;


// title
// date - author - category
// tags: web, design, html
// image - post

// title
// date - author - category
// tags: web, design, html
// post
// image - post




// console.log(firstTitle);
// console.log(blog[0]title);