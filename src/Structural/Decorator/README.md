# Design Pattern For PHP
## 设计模式类型

结构型设计模式

## 设计模式名称

装饰器设计模式

## 应用场景

1、新特性的扩展同时衍生出大量的子类时，系统变得臃肿时
2、动态的扩展与组合不同的特性或组件，并将这种组合关系透明的交给客户端

## 优缺点
###优点
1、动态的为一个对象添加新的特性或指责，比子类继承更加灵活
2、装饰类之间低耦合，并可扩展新职责的装饰器类，符合开放封闭原则
3、动态的删除或新增对象的指责
###缺点
1、多层装饰时业务复杂度会变高
