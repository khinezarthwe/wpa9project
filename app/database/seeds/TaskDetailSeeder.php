<?php
class TaskDetailSeeder extends Seeder {
 
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){         

		DB::table('TaskDetail')->insert(array('taskId'=>1, 'desc'=>'hello', 'remark'=>null));
	}
 
}
?>