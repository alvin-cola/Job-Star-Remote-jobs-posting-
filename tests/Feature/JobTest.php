<?php

namespace Tests\Feature;

use App\Models\Employer;
use App\Models\Job;
use App\Models\Tag;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class JobTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;
    public function test_it_belongs_to_an_employer(): void
    {
        $employer = Employer::factory()->create();
        $job=Job::factory()->create([
            'employer_id'=>$employer->id,
        ]);
        $this->assertTrue($job->employer->is($employer));    }
    public function test_has_tags(): void
    {
        $job=Job::factory()->create([]);
       $job->tag('front end');
        $this->assertCount(1, $job->tags); // Check if the count of tags is 1.
    }
}
