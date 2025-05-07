#!/bin/bash

# 現在の時間を取得（24時間形式）
hour=$(date +"%H")

# 午前（0〜11時）か午後（12〜23時）を判定
if [ $hour -lt 12 ]; then
    # 午前の場合、「ls -la」の結果をファイルに書き出す
    ls -la > ls_output.txt
else
    # 午後の場合、現在時刻を「年月日時分」形式で表示
    date +"%Y%m%d%H%M"
fi
