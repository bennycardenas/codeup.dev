// var title = 'New Blog';
// var post = 'First Post';
// var author = 'Benny Cardenas';


var blog = [


    {
        "title": "First Blog I Created",
        "subtitle": "JSON, Bootstrap and DOT Notation trying to work together",
        "date": "2015-02-19",
        "author": "Benny Cardenas",
        "image": "http://www.someimagehere.com/image.jpg",
        "tags": [
            "web",
            " design",
            " html"
        ],
        "category": "development",
        "post": "lorem ipsum dolor and stuff here"
    },
    {
        "title": "Hehehehe...This one was easier",
        "subtitle": "Things are KINDA clicking",
        "date": "2015-02-19",
        "author": "B. Cardenas",
        "tags": [
            "crtl+c",
            "hr tags was actually taking here!",
            "Bootstrap"
        ],
        "category": "development",
        "post": "lorem ipsum dolor and stuff here"
    }
];

var postTitle = document.getElementsByClassName('post-title');
var postDate = document.getElementsByClassName('post-date');
var postAuthor = document.getElementsByClassName('post-author');
var postTags = document.getElementsByClassName('post-tags');
var postCategory = document.getElementsByClassName('category');
var postSubtitle = document.getElementsByClassName('post-subtitle');

// FIRST POST
postTitle[0].innerHTML = blog[0]['title'];
postDate[0].innerHTML = blog[0].date;
postAuthor[0].innerHTML = blog[0].author;
postTags[0].innerHTML = blog[0]['tags'];
postCategory[0].innerHTML = blog[0].category;
postSubtitle[0].innerHTML = blog[0].subtitle;

// SECOND POST
postTitle[1].innerHTML = blog[1]['title'];
postDate[1].innerHTML = blog[1].date;
postAuthor[1].innerHTML = blog[1].author;
postTags[1].innerHTML = blog[1]['tags'];
postCategory[1].innerHTML = blog[1].category;
postSubtitle[1].innerHTML = blog[1].subtitle;

//SECOND POST


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