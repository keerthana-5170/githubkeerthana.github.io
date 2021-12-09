### December 11 - Maze Festival

   #### Problem Statement
   -On the occasion of Halloween,a grand corn maze puzzle has been set up in the fields of Hubb’s farm,New York.
   -There are several  mystery boxes hidden at each magic spot 
   -Assume that there are N magic spots from 1 to N in the entire field.
   -At the beginning of each round the participants will be given the name of the magic spot to be reached.Given a participant who choses A,B,C the starting spot ,the path      chosen to reach the final spot and the final magic spot respectively.
   -Identify whether the participant can reach the destination spot or not.If yes print the distance covered and the path taken by the participant to reach the final magic spot.Else print “NO PATH FOUND”.
  
   -Note:If a pathway connects A to B with distance d  then it means that it will connect from B to A with the same distance d.
      <p align="center"><img src ="/src/assets/corn-maze.gif" height = "300"/></p> 

   ### Sample Input and output

   ```
   Input:
    T=2

    N=6,m=6
    p q d
    1 2 2
    2 5 5
    2 3 4
    1 4 1
    4 3 3
    3 5 1
    A=1,B=3,C=6

    N=10,m=10
    p q d
    1 5 78
    1 8 221
    2 7 92
    2 8 159
    3 5 55
    3 6 179
    3 10 237
    4 8 205
    5 6 191
    8 10 157
    A=6,B=3,C= 2

   Output: 
   No path found.
   
   692
   6 3 5 1 8 2

   ```
  
  ### Explanation
   ```
  First line of the input contains the number of test cases T. It is followed by T test cases. Each test case's first line contains two integers N and m , where N is the number of magic spots stations from 1 to N and m is the number of pathways which connect the spots. Follows m lines each containing three numbers p , q and d which represent spots having name p connects station q and distance between them is d . After that a line follows with number A , B , C , where A represents the name of the start spot , C the destination spot and B is the spot through which the participant decides to go.For each test case , If there exists no paths as described in the problem print "No Path Found." otherwise in the first line print the total distance and in the second line path to be covered.

   ```   
