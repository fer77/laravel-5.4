<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  public function archive()
  {
    $this->update(['active' => false]);
  }

  public function activate()
  {
    $this->update(['active' => true]);
  }
}
 ?>
