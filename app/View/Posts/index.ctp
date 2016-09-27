<h1>Topic</h1>
<table>
<tr>
    <th>ID</th>
    <th>Topic ID</th>
    <!-- <th>Body</th>
    <th>Created</th>
    <th>Modified</th>
    <th>Edit</th>
    <th>Delete</th> -->
</tr>
<?php foreach($posts as $posts):?>
<tr>
    <td><?php echo $this->HTML->link($posts['Post']['id'],array('controller'=>'posts','action'=>'view',$posts['Post']['id']));?></td>
    <td><?php echo $this->HTML->link($posts['Post']['topic_id'],array('controller'=>'posts','action'=>'view',$posts['Post']['topic_id']));?></td>
    <!-- <td><?php echo $topic['Post']['topic_id'];?></td>
    <td><?php echo $topic['Post']['body'];?></td>
    <td><?php echo $topic['Post']['created'];?></td>
    <td><?php echo $topic['Post']['modified'];?></td>
    <td><?php echo $this->HTML->link('Edit',array('controller'=>'posts','action'=>'edit',$post['Post']['id']));?></td>
    <td><?php echo $this->Form->postLink('Delete',array('controller'=>'posts','action'=>'delete',$post['Post']['id']),array('confirm'=>'Are you sure you want delete this post?'));?></td> -->
</tr>
<?php endforeach;?>
<?php unset($post);?>
</table>