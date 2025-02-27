<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work Experience</title>
</head>
<style>
    /* General Styles */
body {
    font-family: 'Arial', sans-serif;
    background-color: #0c1c60;
    color: white;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

/* Main Container */
.container {
    background-color: #172b84;
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0 4px 10px rgba(255, 255, 255, 0.2);
    width: 60%;
    text-align: center;
}

/* Headings */
h2 {
    color: #f4a236;
    font-size: 24px;
    margin-bottom: 10px;
}

/* Lists */
ul {
    list-style: none;
    padding: 0;
}

li {
    background-color: #203a9c;
    padding: 10px;
    margin: 10px 0;
    border-radius: 8px;
}

/* Buttons */
.nav-links {
    margin-top: 20px;
}

.nav-links a {
    text-decoration: none;
    background-color: #f4a236;
    color: #0c1c60;
    padding: 10px 15px;
    border-radius: 5px;
    font-weight: bold;
    margin: 5px;
    display: inline-block;
    transition: 0.3s;
}

.nav-links a:hover {
    background-color: #e18c1c;
}
</style>
<body>
    <div class="container">
        <h2>Work Experience</h2>
        <ul>
    <?php if (!empty($experience)): ?>
        <?php foreach ($experience as $exp): ?>
            <li>
                <strong><?= esc($exp['title']); ?></strong> at <?= esc($exp['organization']); ?> 
                (<?= esc($exp['year']); ?>)
                <p><?= esc($exp['description']); ?></p>
            </li>
        <?php endforeach; ?>
    <?php else: ?>
        <li>No experience records found.</li>
    <?php endif; ?>
</ul>
    </div>
</body>
</html>
