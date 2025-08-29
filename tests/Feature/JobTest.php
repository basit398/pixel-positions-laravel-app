<?php

use App\Models\Employer;
use App\Models\job;

it('it belongs to an employer', function () {
  
    // Arrange
    $employer= Employer::factory()->create();
    $job= job::factory()->create([
        'employer_id' =>$employer->id,
    ]);

    // Act and assert
    expect($job->employer->is($employer))->toBeTrue();

});




it('can have tag', function () {

  $job= job::factory()->create();

  $job->tag('Frontend ');
 expect($job->tags)->toHaveCount(1);


});



