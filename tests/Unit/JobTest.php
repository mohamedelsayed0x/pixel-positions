<?php

use App\Models\Employer;
use App\Models\Job;

it('belongs to an employer', function () {
    // Arrange
    $employer = Employer::factory()->create();
    $job = Job::factory()->for($employer)->create();

    // Act
    $result = $job->employer;

    // Assert
    expect($result)->toBeInstanceOf(Employer::class);
    expect($result->id)->toBe($employer->id);
});


it('can have tages', function () {
    $job = Job::factory()->create();

    $job->tag('Frontend');

    expect($job->tags)->toHaveCount(1);
});