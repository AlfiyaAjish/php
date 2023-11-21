#include<stdio.h>
 
#define MAX 10
 
int main()
{
	int vertex[MAX],i,j;
	int vertex_num=0;
	int row,column;
	int cost_matrix[MAX][MAX];
	int visited[MAX]={0};
	int edge_count=0,count=1;
	int sum_cost=0,min_cost=0;
	int row_no,column_no,vertex1,vertex2;
 
	printf("Total no of vertex :: ");
	scanf("%d",&vertex_num);
 
	printf("\n-- Enter vertex -- \n\n");
	for(i=1;i<=vertex_num;i++)
	{
		printf("vertex[%d] :: ",i);
		scanf("%d",&vertex[i]);
	}
 
	printf("\n--- Enter Cost matrix of size %d x %d  ---\n\n",vertex_num,vertex_num);
	printf("\n\t-- format is --\n");
	for(i=1;i<=vertex_num;i++)
	{
		for(j=1;j<=vertex_num;j++)
		{
			printf("x ");
		}
		printf("\n");
	}
	printf("\n-- MATRIX --\n\n");
	//Get edge weight matrix from user	
	for(i=1;i<=vertex_num;i++){
		for(j=1;j<=vertex_num;j++)
		{
			scanf("%d",&cost_matrix[i][j]);
			if(cost_matrix[i][j] == 0)
			{
				cost_matrix[i][j] = 999;
			}
		}
	}
 
	printf("\n");
	visited[1]=1;
	edge_count = vertex_num-1;
 
	while(count <= edge_count)
	{
	     min_cost=999;
		for(i=1;i<=vertex_num;i++)
		{
			for(j=1;j<=vertex_num;j++)
			{
				if(cost_matrix[i][j] < min_cost)
				{
					if(visited[i] != 0)
					{
						min_cost = cost_matrix[i][j];
						vertex1 = row_no = i;
						vertex2 = column_no = j;
					}
				}
			}
		}
 
		if(visited[row_no] == 0 || visited[column_no] ==0)
		{
			printf("\nEdge %d is (%d -> %d) with cost : %d ",count++,vertex[vertex1],vertex[vertex2],min_cost);
			sum_cost = sum_cost + min_cost;
			visited[column_no]=1;
		}
		cost_matrix[vertex1][vertex2] = cost_matrix[vertex2][vertex1] = 999;
	}
	printf("\n\nMinimum cost=%d",sum_cost); 
	return 0;
}
