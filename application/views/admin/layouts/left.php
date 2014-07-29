
<div id="menu" class="hidden-phone">
    <div id="menuInner">
        <ul>
       
            <li class="glyphicons cogwheels <?php echo (!empty($active) && $active == 'users') ? 'active' : ''; ?>"><a href="/admin/users/listing"><i></i><span>Users</span></a></li>
            <li class="glyphicons cogwheels <?php echo (!empty($active) && $active == 'tadoo') ? 'active' : ''; ?>"><a href="/admin/tadoo/listing"><i></i><span>Tadoo</span></a></li>
            <li class="glyphicons cogwheels <?php echo (!empty($active) && $active == 'tadoo') ? 'active' : ''; ?>"><a href="/admin/tadooassign/listing"><i></i><span>Task</span></a></li>
            <li class="glyphicons cogwheels <?php echo (!empty($active) && $active == 'tadoo') ? 'active' : ''; ?>"><a href="/admin/tadoonote/listing"><i></i><span>Note</span></a></li>
            <li class="glyphicons cogwheels <?php echo (!empty($active) && $active == 'tadoo') ? 'active' : ''; ?>"><a href="/admin/tadootag/listing"><i></i><span>Tag</span></a></li>

        </ul>

    </div>
</div>