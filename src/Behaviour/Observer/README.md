# Design Pattern For PHP
## 设计模式类型

行为型设计模式

## 设计模式名称

观察者模式

## 应用场景

1、设计中有2个维度的变化，并且其中一个维度的变化依赖与另一维度的状态更新，这是可以使用观察者将其依赖解耦
2、一个对象状态发生变化将影响多个其他对象的状态也发生变化，但不关注具体有多少个对象发生变化。可以降低这种关联变化的耦合度。
3、一个对象变化必须通知其他对象，但不必具体知道这个对象是谁



## 优缺点
###优点

1、被观察者与观察者解耦
2、实现一种触发机制

###缺点

1、如果观察者过多，通知将耗费较大的资源和时间。
2、如果观察者之间有循环依赖的化，将导致循环调用和程序奔溃，使用时需谨慎
3、观察者无法知道观察目标状态发生的原因，只能接收到状态发生变化的通知



