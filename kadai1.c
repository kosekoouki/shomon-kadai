#include <stdio.h>

int main(){
    int math[5] = {72, 88, 72, 81, 68};
    int physics[5] = {48, 39, 91, 82, 78};
    int math_max = math[0], math_min = math[0], math_sum = 0;
    int physics_max = physics[0], physics_min = physics[0], physics_sum = 0;
    int total_max = 0;
    int best_student = 0;
    char* student[5] = {"A", "B", "C", "D", "E"};

    for (int i=0; i<5; i++) {
        if(math[i] > math_max) math_max = math[i];
        if(math[i] < math_min) math_min = math[i];
        math_sum += math[i];

        if(physics[i] > physics_max) physics_max = physics[i];
        if(physics[i] < physics_min) physics_min = physics[i];
        physics_sum += physics[i];

        int total = math[i] + physics[i];
        if (total > total_max){
            total_max = total;
            best_student = i;
        }
    }

    printf("数学の最高点:%d\n", math_max);
    printf("数学の最小点:%d\n", math_min);
    printf("数学の平均点:%.2f\n", (float)math_sum / 5);
    printf("物理の最高点:%d\n", physics_max);
    printf("物理の最小点:%d\n", physics_min);
    printf("物理の平均点:%.2f\n", (float)physics_sum / 5);
    printf("数学と物理の点数が最も高い生徒:%s\n", student[best_student]);

    return 0;

}