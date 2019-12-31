
#include <iostream>
#include<list>
#include<algorithm>

using namespace std;

int main()
{

	list<int> listA;      //生成链表A
	for (int i = 5; i < 10; i++)    //为链表A赋值
	{
		listA.push_back(i);

	}
	list<int>::iterator it_A;   //A的迭代器
	cout << "A:";
	for (it_A = listA.begin(); it_A != listA.end(); it_A++) //show A
	{
		cout << *it_A << ' ';
	}
	cout << endl;
    it_A = listA.begin();

	list<int> listB;   //生成链表B
	for (int i = 8; i < 16; i++)   //为链表B赋值
	{

		listB.push_back(i);
	}
	list<int>::iterator it_B; //B的迭代器
	cout << "B:";
	for (it_B = listB.begin(); it_B != listB.end(); it_B++) //show B
	{
		cout << *it_B << ' ';
	}
	cout << endl;
    it_B = listB.begin();

	int a = *it_A;   //A的当前值
	int b = *it_B;   //B的当前值
	

	while (it_A != listA.end() && it_B != listB.end())
	{

		if ((a < b))  //a<b时，删除A的当前值，a变为下一节点值，b不变
		{
			it_A = listA.erase(it_A);
			//it_A++;
			if(it_A != listA.end())   //A是否遍历完成
				a = *it_A;
		}
		else if (a == b)  //a==b是，保留A的当前值，a变为下一节点值，b不变
		{
			it_A++;
			if(it_A != listA.end())   //A是否遍历完成
				a = *it_A;
		}
		else     //a>b时，a不变，b变为下一节点值
		{
			it_B++;
			if(it_B != listB.end())   //B是否便利完成
				b = *it_B;
		}

	}
	if (it_B == listB.end())  //B先便历完成，删除A的剩余节点
		listA.erase(it_A, listA.end());

	if (!listA.empty())  //A是否为空
	{
		for (it_A = listA.begin(); it_A != listA.end()--; it_A++)  //输出A节点值
		{
			cout << *it_A << " ";
		}
        cout << endl;
	}
	else
		cout << "无交集" << endl;
    


	return 0;

}
