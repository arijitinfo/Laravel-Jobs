<?php namespace Fbf\LaravelJobs;

class Job extends \Eloquent {

	const DRAFT = 'DRAFT';
	const APPROVED = 'APPROVED';
	const PERMANENT = 'PERMANENT';
	const TEMPORARY = 'TEMPORARY';
	const FULL_TIME = 'FULL_TIME';
	const PART_TIME = 'PART_TIME';

	protected $table = 'fbf_jobs';

	public static $sluggable = array(
        'build_from' => 'title',
        'save_to'    => 'slug',
    );

}