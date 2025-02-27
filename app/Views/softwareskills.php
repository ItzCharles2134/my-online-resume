<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Software Skills</title>
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
    <h1>Software Skills</h1>
    <ul>
      <?php if (!empty($software_skills)): ?>
        <?php foreach ($software_skills as $software): ?>
          <li><strong><?= esc($software['skill_name']); ?></strong> - <?= esc($software['proficiency']); ?></li>
        <?php endforeach; ?>
      <?php else: ?>
        <li>No software skills found.</li>
      <?php endif; ?>
    </ul>
  </div>
</body>
</html>
