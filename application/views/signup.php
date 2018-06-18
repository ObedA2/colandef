<?php echo form_open('Users/create'); ?>
    <label for="name">Name</label>
    <input type="text" name="name"><br/><br/>

    <label for="phone">Phone Number</label>
    <input type="phone" name="phone"><br/><br/>

    <label for="email">Email</label>
    <input type="email" name="email"><br/><br/>

    <label for="message">Message</label>
    <input type="textarea" name="message"><br/><br/>

    <input type="submit" name="create user"><br/><br/>
<?php echo anchor('Users/getUserData', 'See users') ?>

