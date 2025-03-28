#include <stdio.h>
#include <string>

int main(void)
{
    string name = get_string("What is your name? ");
    printf("Hello, %s\n", name);
}