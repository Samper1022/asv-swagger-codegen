package io.swagger.codegen.languages;

import java.util.ArrayList;
import java.util.List;
import java.util.Map;

import io.swagger.codegen.CliOption;
import io.swagger.codegen.CodegenConfig;
import io.swagger.codegen.CodegenOperation;
import io.swagger.codegen.CodegenType;
import io.swagger.codegen.DefaultCodegen;

public class Apache2ConfigCodegen extends DefaultCodegen implements CodegenConfig {
  public static final String USER_INFO_PATH = "userInfoPath";
  protected String userInfoPath = "/var/www/html/";

  @Override
  public CodegenType getTag() {
    return CodegenType.CONFIG;
  }

  @Override
  public String getName() {
    return "apache2";
  }

  @Override
  public String getHelp() {
    return "Generates an Apache2 Config file with the permissions";
  }

  public Apache2ConfigCodegen() {
    super();
    apiTemplateFiles.put("apache-config.mustache", ".conf");

    embeddedTemplateDir = templateDir = "apache2";
    
    cliOptions.add(new CliOption(USER_INFO_PATH, "Path to the user and group files"));
  }
  

  @Override
  public void processOpts() {
    if (additionalProperties.containsKey(USER_INFO_PATH)) {
      userInfoPath = additionalProperties.get(USER_INFO_PATH).toString();
    }
  }
  
  @Override
  public String escapeQuotationMark(String input) {
      // remove " to avoid code injection
      return input.replace("\"", "");
  }

  @Override
  public String escapeUnsafeCharacters(String input) {
      return input.replace("*/", "*_/").replace("/*", "/_*");
  }
  
  @SuppressWarnings("unchecked")
  @Override
  public Map<String, Object> postProcessOperations(Map<String, Object> objs) {
    Map<String, Object> operations = (Map<String, Object>) objs.get("operations");
    List<CodegenOperation> operationList = (List<CodegenOperation>) operations.get("operation");
    List<CodegenOperation> newOpList = new ArrayList<CodegenOperation>();
    for (CodegenOperation op : operationList) {
      String path = new String(op.path);

      String[] items = path.split("/", -1);
      List<String> splitPath = new ArrayList<String>();
      for (String item: items) {
        if (item.matches("^\\{(.*)\\}$")) {
          item = "*";
        }
        splitPath.add(item);
        op.path += item + "/";
      }
      op.vendorExtensions.put("x-codegen-userInfoPath", userInfoPath);
      newOpList = PostProcessOperation.postProcessOperation(newOpList, op);
    }
    operations.put("operation", newOpList);
    return objs;
  }
}
