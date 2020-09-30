<div class="customize-control" id="customize-control-<?php echo $control['dummy_id']; ?>">
    <label for="<?php echo $control['dummy_id']; ?>" class="customize-control-title"><?php echo $control['label']; ?>:</label>
    <select id="<?php echo $control['dummy_id']; ?>" disabled>
        <%
        var options = _( parts ).where( { type: 'email' } );

        options.forEach( function( option, i ) { %>
        <option value="<%= option.id %>" <%= ( 0 === i ) ? 'selected' : '' %>>"<%= option.label %>" <?php _e( 'field', 'happyforms' ); ?></option>
        <% } ); %>
    </select>
</div>