<?php

namespace App\Console\Commands;

use App\Models\Blog;
use Illuminate\Console\Command;

class UpdateBlogSlugs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'blogs:update-slugs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update slugs for all blog posts';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $blogs = Blog::all();
        foreach($blogs as $blog){
            $blog->slug = \App\Models\Blog::generateUniqueSlug($blog->title, $blog->id);
            $blog->save();
        };

        $this->info('Blog slugs updated successfully.');
    }
}
