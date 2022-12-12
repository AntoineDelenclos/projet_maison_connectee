There are 9 data files representing the problems solved in Beasley and Chu (1998)
  
These data files are _mknapcb1_res, _mknapcb2_res, ..., _mknapcb9_res
Eeach file contains 30 test problems, the first ten problems 
have a tightness ratio of 0.25, the second ten problems have a tightness
ratio of 0.50 and the last ten problems have a tightness ratio of 0.75 (see
the above paper).
  
 The problem to be solved is:
 Max  sum{j=1,...,N} p(j)x(j)
 st   sum{j=1,...,N} r(i,j)x(j) <= b(i)       i=1,...,M
                     x(j)=0 or 1
  
 The format of this data file is:
 number of test problems (K)
 then for each test problem k (k=1,...,K) in turn:
    number of variables (N), number of constraints (M), value of solution found [by Angelelli et al. (2007)], value of best solution known
    the solution found x(j); j=1,...,N
    the coefficients p(j); j=1,...,N
    for each constraint i (i=1,...,M): the coefficients r(i,j); j=1,...,N
    the constraint right-hand sides b(i); i=1,...,M
  

File BestResultsKnown.txt reports the best solution found in three papers
by Chu and Beasley (1998), Vasques and Vimont (2005), Angelelli, Mansini and Speranza (2007)
and finally the value of the LP relaxation for all the problems.


- J.E.Beasley and P.C.Chu "A genetic algorithm for the multidimensional knapsack problem" Journal of Heuristics, 4: 63–86 (1998)
- M. Vasquez and Y. Vimont "Improved results on the 0–1 multidimensional knapsack problem" European Journal of Operational Research 165 (2005) 70–81
- E. Angelelli, R. Mansini, M.G. Speranza "Kernel Search: a heuristic framework for MILP problems with binary variables", Technical Report 2007-04-56 of Department of Electronics and Automation, University of Brescia (2007)
