public function up()
{
    Schema::create('lop_hocs', function (Blueprint $table) {
        $table->id(); // khóa chính
        $table->string('ten_lop'); // tên lớp
        $table->string('giao_vien'); // giáo viên
        $table->integer('so_luong'); // số lượng
        $table->timestamps(); // created_at, updated_at
    });
}