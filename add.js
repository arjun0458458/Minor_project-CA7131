// Get the blog posts container
const blogPosts = document.getElementById('blogPosts');

// Function to add a new post
function addPost() {
    const postTitle = document.getElementById('postTitle').value;
    const postContent = document.getElementById('postContent').value;

    if (postTitle && postContent) {
        // Create elements for the new post
        const post = document.createElement('div');
        post.classList.add('blog-post');

        const title = document.createElement('h2');
        title.textContent = postTitle;

        const content = document.createElement('p');
        content.textContent = postContent;

        // Append title and content to post
        post.appendChild(title);
        post.appendChild(content);

        // Append post to blogPosts
        blogPosts.appendChild(post);

        // Clear input fields
        document.getElementById('postTitle').value = '';
        document.getElementById('postContent').value = '';
    } else {
        alert("Please enter both title and content for the post.");
    }
}
