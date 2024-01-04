<?php 
    get_header();

echo '<div class="welcome-section">';
echo '<h1 id="welcome-header">Welcome to My Custom Theme!</h1>';
echo '<p class="welcome-subtitle">Explore our latest features and updates.</p>';
echo '<button onclick="changeWelcomeMessage()">Click Me!</button>';
echo '</div>';

$hour = date('G');
if ($hour < 12) {
    echo '<p>Good morning!</p>';
} else if ($hour < 18) {
    echo '<p>Good afternoon!</p>';
} else {
    echo '<p>Good evening!</p>';
}

$samplePosts = ['Post 1', 'Post 2', 'Post 3'];
echo '<ul>';
foreach ($samplePosts as $post) {
    echo '<li>' . $post . '</li>';
}
echo '</ul>';

get_footer();
?>
