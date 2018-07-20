<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**
     * 型定義
     * @var array
     */
    protected $casts = [
        'is_published' => 'boolean',
    ];

    /**
     * 公開ステータスを取得する方法
     * @return string
     */
    public function status(): string
    {
        if ($this->is_published === true) {
            return '公開中';
        }

        return '未公開';
    }

    /**
     * ユーザリレーション
     * １対１
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    /**
     * 公開中のもののみ表示
     * @param $query
     * @return mixed
     */
    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

}
