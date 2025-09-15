<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Job extends Model
{
    use HasFactory;
  protected $table = 'jobs-listings';
  protected $guarded = [];
  public function tag(string $name){
      $tag = Tag::factory()->create(['name' => $name]);
      $this->tags()->attach($tag);
  }
  public function employer(){
      return $this->belongsTo(Employer::class);
  }
  public function tags(){
      return $this->belongsToMany(Tag::class,foreignPivotKey: 'jobs-listings_id');
  }
}
