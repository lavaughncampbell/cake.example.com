<h1>Articles</h1>

<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Created</th>
            <th>Actions</th>
        </tr>
    </thead>

        <?php foreach($articles as $article); ?>
          <tr>
              <td>

                  <?php
                  echo $this->Html->link(
                    $article->title,
                    [
                        'action' =>'view',
                        $article->slug
                    ]
          );
          ?>

        </td>
        <td>
            <?php echo $article->created->format(DATE_RFC850); ?>
        </td>
        <td>
            <?php echo $this->html->link('Edit',['action'=>'edit', $article->slug]); ?>
          </td>
        </tr>
      <?php endforeach;?>

    </tbody>

  </table>
