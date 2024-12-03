<form action="" method="post">
    <!-- Post Text Input -->
    <label for="posttext">Type your questions here:</label>
    <textarea id="posttext" name="posttext" rows="3" cols="40" required></textarea>
    
    <!-- People Selection Dropdown -->
    <label for="peopleid">People:</label>
    <select id="peopleid" name="peopleid">
        <?php
        // Fetch people data from the database
        $peoples = $pdo->query('SELECT id, name FROM people')->fetchAll(PDO::FETCH_ASSOC);
        foreach ($peoples as $people) {
            echo '<option value="' . htmlspecialchars($people['id']) . '">' . htmlspecialchars($people['name']) . '</option>';
        }
        ?>
    </select>
    
    <!-- Module Selection Dropdown -->
    <label for="moduleid">Module:</label>
    <select id="moduleid" name="moduleid">
        <?php
        // Fetch module data from the database
        $modules = $pdo->query('SELECT id, name FROM module')->fetchAll(PDO::FETCH_ASSOC);
        foreach ($modules as $module) {
            echo '<option value="' . htmlspecialchars($module['id']) . '">' . htmlspecialchars($module['name']) . '</option>';
        }
        ?>
    </select>

    <!-- Action Buttons -->
    <button type="submit" name="submit_add_list">Add questions </button>
</form>
